// Seletores de elementos
const menuBar = document.querySelector("#menu-bar");
const navbar = document.querySelector(".navbar");
const searchBtn = document.querySelector("#search-btn");
const searchBar = document.querySelector(".search-bar-container");
const loginBtn = document.querySelector("#login-btn");
const loginForm = document.querySelector(".login-form-container");
const formClose = document.querySelector("#form-close");
const vidBtns = document.querySelectorAll(".vid-btn");
const videoSlider = document.querySelector("#video-slider");

document.addEventListener('DOMContentLoaded', () => {
    // Seleciona os elementos
    const loginBtn = document.getElementById('login-btn');
    const signupLink = document.querySelector('.login-form-container form p a');
    const loginForm = document.querySelector('.login-form-container');
    const signupForm = document.querySelector('.signup-form-container');
    const loginClose = document.getElementById('form-close');
    const signupClose = document.getElementById('signup-close');
    const switchToLoginLink = document.querySelector('.signup-form-container form p a.switch-to-login');

    // Abre a tela de login
    if (loginBtn) {
        loginBtn.addEventListener('click', () => {
            if (loginForm) loginForm.classList.add('active');
        });
    }

    // Fecha a tela de login
    if (loginClose) {
        loginClose.addEventListener('click', () => {
            if (loginForm) loginForm.classList.remove('active');
        });
    }

    // Abre a tela de cadastro
    if (signupLink) {
        signupLink.addEventListener('click', (e) => {
            e.preventDefault();
            if (loginForm) loginForm.classList.remove('active');
            if (signupForm) signupForm.classList.add('active');
        });
    }

    // Fecha a tela de cadastro
    if (signupClose) {
        signupClose.addEventListener('click', () => {
            if (signupForm) signupForm.classList.remove('active');
        });
    }

    // Redireciona para a tela de login ao clicar em "Faça login aqui!"
    if (switchToLoginLink) {
        switchToLoginLink.addEventListener('click', (e) => {
            e.preventDefault(); // Impede o comportamento padrão do link
            if (signupForm) signupForm.classList.remove('active'); // Fecha o cadastro
            if (loginForm) loginForm.classList.add('active'); // Abre o login
        });
    }
    
    // Inicializar carrossel quando necessário
    if (document.querySelector('.box[data-carrossel]')) {
        initCarrossel();
    }
    
    // Navegação suave do botão "Descubra mais"
    const discoverMoreLink = document.querySelector('.home .btn');
    if (discoverMoreLink) {
        discoverMoreLink.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = discoverMoreLink.getAttribute('href')?.substring(1);
            if (targetId) {
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.navbar a');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1); // Remove o '#'
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
    
    // Inicializar carrossel quando necessário
    if (document.querySelector('.box[data-carrossel]')) {
        initCarrossel();
    }
});

// ========== FUNÇÕES PRINCIPAIS ========== //

// Menu responsivo
if (menuBar && navbar) {
    menuBar.addEventListener('click', () => {
        navbar.classList.toggle("active");
        searchBar?.classList.remove("active");
        loginForm?.classList.remove("active");
    });
}

// Barra de pesquisa
if (searchBtn && searchBar) {
    searchBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        searchBar.classList.toggle("active");
        navbar?.classList.remove("active");
        loginForm?.classList.remove("active");
    });
}

// Formulário de login
if (loginBtn && loginForm) {
    loginBtn.addEventListener('click', () => {
        loginForm.classList.add("active");
        navbar?.classList.remove("active");
        searchBar?.classList.remove("active");
    });
}

if (formClose && loginForm) {
    formClose.addEventListener('click', () => {
        loginForm.classList.remove("active");
    });
}

// Controle do vídeo
if (vidBtns.length > 0 && videoSlider) {
    vidBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const activeBtn = document.querySelector(".vid-btn.active");
            if (activeBtn) activeBtn.classList.remove("active");
            
            btn.classList.add("active");
            const src = btn.getAttribute("data-src");
            if (src) {
                videoSlider.src = src;
                videoSlider.play().catch(e => console.log("Autoplay prevented:", e));
            }
        });
    });
}

// Fechar menus ao rolar ou clicar fora
window.addEventListener('scroll', () => {
    navbar?.classList.remove("active");
    searchBar?.classList.remove("active");
});

document.addEventListener('click', (e) => {
    if (searchBar && !e.target.closest('.search-bar-container') && !e.target.matches('#search-btn')) {
        searchBar.classList.remove("active");
    }
});

// ========== ANIMAÇÃO DOS TÍTULOS ========== //
const headingSpans = document.querySelectorAll('.heading span');
if (headingSpans.length > 0) {
    headingSpans.forEach((span, index) => {
        span.style.setProperty('--i', index);
    });
}

// ========== CARROSSEL DE IMAGENS ========== //
function initCarrossel() {
    // Dados das imagens para cada pacote
    const carrosseis = {
        ap_luxo: [
            'imagens/ap_luxo10.0/10.7ap.jpg',
            'imagens/ap_luxo10.0/10.6ap.jpg',
            'imagens/ap_luxo10.0/10.5ap.jpg',
            'imagens/ap_luxo10.0/10.4ap.jpg',
            'imagens/ap_luxo10.0/10.3ap.jpg',
            'imagens/ap_luxo10.0/10.2ap.jpg',
            'imagens/ap_luxo10.0/10.1ap.jpg'
        ],
        bangalo_luxo: [
            'imagens/bagalo_luxo11.0/11.1luxo.jpg',
            'imagens/bagalo_luxo11.0/11.2luxo.jpg',
            'imagens/bagalo_luxo11.0/11.3luxo.jpg',
            'imagens/bagalo_luxo11.0/11.4luxo.jpg',
            'imagens/bagalo_luxo11.0/11.5luxo.jpg',
            'imagens/bagalo_luxo11.0/11.6luxo.jpg',
            'imagens/bagalo_luxo11.0/11.7luxo.jpg'
        ],
        bangalo_master: [
            'imagens/bangalo_master12.0/12.1master.jpg',
            'imagens/bangalo_master12.0/12.2master.jpg',
            'imagens/bangalo_master12.0/12.3master.jpg',
            'imagens/bangalo_master12.0/12.4master.jpg',
            'imagens/bangalo_master12.0/12.5master.jpg',
            'imagens/bangalo_master12.0/12.6master.jpg',
            'imagens/bangalo_master12.0/12.7master.jpg',
            'imagens/bangalo_master12.0/12.8master.jpg',
            'imagens/bangalo_master12.0/12.9master.jpg'
        ]
    };

    // Elementos do modal
    const modal = document.getElementById('carrosselModal');
    const modalImg = document.querySelector('.slide img');
    const fecharBtn = document.querySelector('.fechar');
    const anteriorBtn = document.querySelector('.anterior');
    const proximoBtn = document.querySelector('.proximo');
    
    if (!modal || !modalImg || !fecharBtn || !anteriorBtn || !proximoBtn) return;

    let currentCarrossel = [];
    let currentIndex = 0;

    // Abrir modal quando uma caixa for clicada
    document.querySelectorAll('.box[data-carrossel]').forEach(box => {
        box.addEventListener('click', function(e) {
            if (e.target.classList.contains('btn')) return;
            
            const carrosselId = this.getAttribute('data-carrossel');
            currentCarrossel = carrosseis[carrosselId] || [];
            currentIndex = 0;
            
            if (currentCarrossel.length > 0) {
                modal.style.display = 'block';
                modalImg.src = currentCarrossel[currentIndex];
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // Fechar modal
    fecharBtn.addEventListener('click', function() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    // Navegação do carrossel
    anteriorBtn.addEventListener('click', function() {
        if (currentCarrossel.length === 0) return;
        currentIndex = (currentIndex - 1 + currentCarrossel.length) % currentCarrossel.length;
        modalImg.src = currentCarrossel[currentIndex];
    });

    proximoBtn.addEventListener('click', function() {
        if (currentCarrossel.length === 0) return;
        currentIndex = (currentIndex + 1) % currentCarrossel.length;
        modalImg.src = currentCarrossel[currentIndex];
    });

    // Fechar modal ao clicar fora da imagem
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Navegação por teclado
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'block' && currentCarrossel.length > 0) {
            if (e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + currentCarrossel.length) % currentCarrossel.length;
                modalImg.src = currentCarrossel[currentIndex];
            } else if (e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % currentCarrossel.length;
                modalImg.src = currentCarrossel[currentIndex];
            } else if (e.key === 'Escape') {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    });
}


document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.avaliacoes-track');
    const boxes = document.querySelectorAll('.avaliacao-box');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dotsContainer = document.querySelector('.pagination-dots');
    
    // Número de avaliações originais (sem as cópias)
    const originalBoxCount = 4;
    let currentIndex = 0;
    let isTransitioning = false;
    
    // Criar dots de paginação apenas para as avaliações originais
    for (let i = 0; i < originalBoxCount; i++) {
        const dot = document.createElement('span');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(i));
        dotsContainer.appendChild(dot);
    }
    
    const dots = document.querySelectorAll('.pagination-dots span');
    
    // Atualizar a exibição
    function updateSlider() {
        if (isTransitioning) return;
        
        let slideWidth;
        
        // Determinar a largura do slide com base no tamanho da tela
        if (window.innerWidth >= 992) {
            slideWidth = 33.333; // 3 slides visíveis
        } else if (window.innerWidth >= 768) {
            slideWidth = 50; // 2 slides visíveis
        } else {
            slideWidth = 100; // 1 slide visível
        }
        
        const translateValue = -currentIndex * slideWidth;
        track.style.transition = 'transform 0.5s ease';
        track.style.transform = `translateX(${translateValue}%)`;
        
        // Atualizar dots ativos
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === (currentIndex % originalBoxCount));
        });
    }
    
    // Navegar para um slide específico
    function goToSlide(index) {
        if (isTransitioning) return;
        currentIndex = index;
        updateSlider();
    }
    
    // Avançar slide
    function nextSlide() {
        if (isTransitioning) return;
        
        currentIndex++;
        
        // Se chegou ao final das cópias, voltar suavemente para o início
        if (currentIndex > boxes.length - 3) {
            isTransitioning = true;
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = `translateX(-${currentIndex * getSlideWidth()}%)`;
            
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = 0;
                track.style.transform = `translateX(0%)`;
                setTimeout(() => {
                    isTransitioning = false;
                }, 50);
            }, 500);
        } else {
            updateSlider();
        }
    }
    
    // Voltar slide
    function prevSlide() {
        if (isTransitioning) return;
        
        currentIndex--;
        
        // Se chegou ao início, ir suavemente para o final
        if (currentIndex < 0) {
            isTransitioning = true;
            const slideWidth = getSlideWidth();
            track.style.transition = 'none';
            currentIndex = originalBoxCount;
            track.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
            
            setTimeout(() => {
                track.style.transition = 'transform 0.5s ease';
                currentIndex--;
                track.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }, 10);
        } else {
            updateSlider();
        }
    }
    
    // Obter a largura do slide baseado no tamanho da tela
    function getSlideWidth() {
        if (window.innerWidth >= 992) {
            return 33.333;
        } else if (window.innerWidth >= 768) {
            return 50;
        } else {
            return 100;
        }
    }
    
    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    // Atualizar quando a janela for redimensionada
    window.addEventListener('resize', function() {
        updateSlider();
    });
    
    // Inicializar slider
    updateSlider();
    
    // Autoplay (opcional)
    let autoplayInterval = setInterval(nextSlide, 5000);
    
    // Pausar autoplay quando o mouse estiver sobre o carrossel
    track.addEventListener('mouseenter', () => {
        clearInterval(autoplayInterval);
    });
    
    track.addEventListener('mouseleave', () => {
        autoplayInterval = setInterval(nextSlide, 5000);
    });
});
