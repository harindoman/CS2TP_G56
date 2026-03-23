(function(){
  const root = document.getElementById('chatbot-root');
  if (!root) return;

  const panel = document.getElementById('chatbot-panel');
  const toggle = document.getElementById('chatbot-toggle');
  const closeBtn = root.querySelector('.ChatbotClose');
  const messagesEl = document.getElementById('chatbot-messages');
  const form = document.getElementById('chatbot-form');
  const input = document.getElementById('chatbot-input');

  const history = [];
  const suggestions = (window.SKYROSE_CHATBOT && window.SKYROSE_CHATBOT.suggestions) || [];

  function getCsrfToken(){
    const meta = document.querySelector('meta[name="csrf-token"]');
    return meta ? meta.getAttribute('content') : '';
  }

  function appendMessage(role, text){
    const bubble = document.createElement('div');
    bubble.className = 'ChatbotBubble ' + (role === 'assistant' ? 'ChatbotBubble--bot' : 'ChatbotBubble--user');
    bubble.textContent = text;
    messagesEl.appendChild(bubble);
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function setLoading(isLoading){
    if (isLoading){
      let spinner = root.querySelector('.ChatbotTyping');
      if (!spinner){
        spinner = document.createElement('div');
        spinner.className = 'ChatbotTyping';
        spinner.innerHTML = '<span></span><span></span><span></span>';
        messagesEl.appendChild(spinner);
      }
    } else {
      const spinner = root.querySelector('.ChatbotTyping');
      if (spinner) spinner.remove();
    }
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function togglePanel(force){
    const shouldOpen = force !== undefined ? force : panel.hasAttribute('hidden');
    if (shouldOpen){
      panel.removeAttribute('hidden');
      root.classList.add('is-open');
      toggle.setAttribute('aria-expanded', 'true');
      setTimeout(()=> input?.focus({preventScroll:true}), 10);
    } else {
      panel.setAttribute('hidden','hidden');
      root.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
      toggle?.focus({preventScroll:true});
    }
  }

  toggle?.addEventListener('click', ()=> togglePanel());
  closeBtn?.addEventListener('click', (e)=> { e.stopPropagation(); togglePanel(false); });
  document.addEventListener('keydown', (e)=> {
    if (e.key === 'Escape' && !panel.hasAttribute('hidden')) togglePanel(false);
  });

  // Suggestion: focus reveals a hint
  input?.addEventListener('focus', ()=>{
    if (suggestions.length){
      input.setAttribute('placeholder', 'Ask about ' + suggestions.slice(0,3).join(', ') + '…');
    }
  });

  form?.addEventListener('submit', function(e){
    e.preventDefault();
    const text = input.value.trim();
    if (!text) return;

    appendMessage('user', text);
    history.push({ role: 'user', content: text });
    input.value = '';
    setLoading(true);


    // Basic frontend responses (Zak edit - quick replies for common questions)
const lowerText = text.toLowerCase();

if (lowerText.includes('delivery') || lowerText.includes('shipping')) {
  setLoading(false);
  appendMessage('assistant', 'We offer standard delivery (3–5 days) and express delivery (1–2 days).');
  return;
}

if (lowerText.includes('return') || lowerText.includes('refund')) {
  setLoading(false);
  appendMessage('assistant', 'You can return items within 14 days as long as they are unworn.');
  return;
}

if (lowerText.includes('contact')) {
  setLoading(false);
  appendMessage('assistant', 'Use the contact page to email us about your enquiry.');
  return;
}


if (lowerText.includes('price') || lowerText.includes('cost')) {
  setLoading(false);
  appendMessage('assistant', 'Prices are listed on each product page. Let me know if you are looking for something specific!');
  return;
}

if (lowerText.includes('ring size') || lowerText.includes('size')) {
  setLoading(false);
  appendMessage('assistant', 'We recommend checking our size guide or choosing adjustable options.');
  return;
}


    fetch('/chatbot/message', {
      method: 'POST',
      credentials: 'include',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': getCsrfToken()
      },
      body: JSON.stringify({ message: text, history: history })
    })
    .then(async (res) => {
      setLoading(false);
      if (!res.ok) {
        const errText = await res.text();
        throw new Error(errText || 'Chatbot unavailable');
      }
      return res.json();
    })
    .then(data => {
      const reply = data.reply || 'Sorry, I could not find an answer right now.';
      appendMessage('assistant', reply);
      history.push({ role: 'assistant', content: reply });
    })
    .catch(err => {
      setLoading(false);
      appendMessage('assistant', 'Sorry, the assistant is unavailable. Please try again shortly.');
      console.error('Chatbot error', err);
    });
  });
})();
