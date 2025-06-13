class SmoothScroll {
    constructor(offset = 100) {
        this.offset = offset;
        this.init();
    }
    
    init() {
        const links = document.querySelectorAll('a[href^="#"]:not([href="#"])');
        
        links.forEach(link => {
            link.addEventListener('click', (e) => this.handleClick(e));
        });
    }
    
    handleClick(e) {
        e.preventDefault();
        
        const targetId = e.currentTarget.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (!targetElement) {
            console.warn(`Elemento con ID ${targetId} non trovato`);
            return;
        }
        
        this.scrollToElement(targetElement);
    }
    
    scrollToElement(element) {
        const elementTop = element.getBoundingClientRect().top;
        const offsetPosition = elementTop + window.pageYOffset - this.offset;
        
        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
}

// Classe per gestire le animazioni con delay che si ripetono
class AnimationManager {
    constructor() {
        this.activeTimeouts = new Map(); // Per tracciare i timeout attivi
        this.init();
    }

    init() {
        // Intersection Observer per le animazioni ripetibili
        this.observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Elemento visibile - attiva animazione
                    this.showElement(entry.target);
                } else {
                    // Elemento non visibile - nascondi e resetta
                    this.hideElement(entry.target);
                }
            });
        }, {
            threshold: 0.15, // Si attiva quando il 15% dell'elemento è visibile
            rootMargin: '0px 0px -100px 0px' // Margine per attivare prima
        });

        // Osserva tutti gli elementi con animazioni
        this.observeElements();
    }

    observeElements() {
        // Osserva tutti gli elementi con classi di animazione
        const animatedElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in, .rotate-in');
        animatedElements.forEach((el) => {
            // Assicurati che inizino nascosti
            if (!el.classList.contains('hidden')) {
                el.classList.add('hidden');
            }
            this.observer.observe(el);
        });
    }

    showElement(element) {
        // Cancella timeout precedenti se esistono
        if (this.activeTimeouts.has(element)) {
            clearTimeout(this.activeTimeouts.get(element));
            this.activeTimeouts.delete(element);
        }

        const delay = parseInt(element.dataset.delay) || 0;
        
        const timeout = setTimeout(() => {
            // Rimuovi hidden e aggiungi show
            element.classList.remove('hidden');
            element.classList.add('show');
            
            // Rimuovi il timeout dalla mappa dato che è completato
            this.activeTimeouts.delete(element);
        }, delay);

        // Salva il timeout per poterlo cancellare se necessario
        this.activeTimeouts.set(element, timeout);
    }

    hideElement(element) {
        // Cancella timeout se l'elemento esce dalla vista prima del delay
        if (this.activeTimeouts.has(element)) {
            clearTimeout(this.activeTimeouts.get(element));
            this.activeTimeouts.delete(element);
        }

        // Nascondi immediatamente l'elemento
        element.classList.remove('show');
        element.classList.add('hidden');
    }

    // Metodo per controllare lo stato delle animazioni
    getStatus() {
        const total = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in, .rotate-in').length;
        const visible = document.querySelectorAll('.show').length;
        const pending = this.activeTimeouts.size;
        
        console.log(`📊 Animazioni: ${visible}/${total} visibili, ${pending} in attesa`);
        return { total, visible, pending };
    }

    // Forza il refresh di tutte le animazioni
    refreshAll() {
        // Cancella tutti i timeout
        this.activeTimeouts.forEach(timeout => clearTimeout(timeout));
        this.activeTimeouts.clear();
        
        // Resetta tutti gli elementi
        const elements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in, .rotate-in');
        elements.forEach(el => {
            el.classList.remove('show');
            el.classList.add('hidden');
        });
        
        console.log('🔄 Tutte le animazioni sono state resettate');
    }
}

// Inizializza tutto quando il DOM è caricato
document.addEventListener('DOMContentLoaded', () => {
    // Inizializza smooth scroll
    const smoothScroll = new SmoothScroll(0);
    
    // Inizializza animation manager
    const animationManager = new AnimationManager();

    // Aggiungi controlli per demo e debug
    console.log('🎬 Animazioni ripetibili inizializzate!');
    console.log('📝 Comandi disponibili:');
    console.log('   - animationManager.getStatus() -> stato animazioni');
    console.log('   - animationManager.refreshAll() -> resetta tutto');
    console.log('🔄 Le animazioni si ripetono quando esci/entri nella viewport!');
    
    // Rendi disponibile globalmente per debug
    window.animationManager = animationManager;
});

