const tabs = document.querySelectorAll('.tab, .file');
    const sections = document.querySelectorAll('.pane');

    function setActive(target) {
      document.querySelectorAll('.tab').forEach(t => t.classList.toggle('active', t.dataset.target === target));
      document.querySelectorAll('.file').forEach(t => t.classList.toggle('active', t.dataset.target === target));
    }

    tabs.forEach(t => {
      t.addEventListener('click', (e) => {
        e.preventDefault();
        const id = t.dataset.target;
        document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
        setActive(id);
      });
    });

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) { setActive(entry.target.id); }
      });
    }, { threshold: 0.4 });
    sections.forEach(s => observer.observe(s));

    const clock = document.getElementById('clock');
    function updateClock() {
      const d = new Date();
      clock.textContent = d.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' }) + ' WIB';
    }
    updateClock();
    setInterval(updateClock, 30000);