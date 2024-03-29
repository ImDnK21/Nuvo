const select = document.multiselect('#select')
const servicios = document.getElementById('servicios')
const inputImport = document.getElementById('inputImport')

window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});

// if (select) {
//     setInterval(() => {
//         var checked = document.querySelectorAll('#select :checked');
//         var selected = [...checked].map(option => option.value);
//         servicios.value = selected
//             // console.log(selected)
//     }, 1)
// }

// const displacementSlider = function(opts) {
//     let vertex = `
//         varying vec2 vUv;
//         void main() {
//           vUv = uv;
//           gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
//         }
//     `;

//     let fragment = `

//         varying vec2 vUv;

//         uniform sampler2D currentImage;
//         uniform sampler2D nextImage;

//         uniform float dispFactor;

//         void main() {

//             vec2 uv = vUv;
//             vec4 _currentImage;
//             vec4 _nextImage;
//             float intensity = 0.3;

//             vec4 orig1 = texture2D(currentImage, uv);
//             vec4 orig2 = texture2D(nextImage, uv);

//             _currentImage = texture2D(currentImage, vec2(uv.x, uv.y + dispFactor * (orig2 * intensity)));

//             _nextImage = texture2D(nextImage, vec2(uv.x, uv.y + (1.0 - dispFactor) * (orig1 * intensity)));

//             vec4 finalTexture = mix(_currentImage, _nextImage, dispFactor);

//             gl_FragColor = finalTexture;

//         }
//     `;

//     let images = opts.images,
//         image, sliderImages = [];;
//     let canvasWidth = images[0].clientWidth;
//     let canvasHeight = images[0].clientHeight;
//     let parent = opts.parent;
//     let renderWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
//     let renderHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

//     let renderW, renderH;

//     if (renderWidth > canvasWidth) {
//         renderW = renderWidth;
//     } else {
//         renderW = canvasWidth;
//     }

//     renderH = canvasHeight;

//     let renderer = new THREE.WebGLRenderer({
//         antialias: false,
//     });

//     renderer.setPixelRatio(window.devicePixelRatio);
//     renderer.setClearColor(0x23272A, 1.0);
//     renderer.setSize(renderW, renderH);
//     parent.appendChild(renderer.domElement);

//     let loader = new THREE.TextureLoader();
//     loader.crossOrigin = "anonymous";

//     images.forEach((img) => {

//         image = loader.load(img.getAttribute('src') + '?v=' + Date.now());
//         image.magFilter = image.minFilter = THREE.LinearFilter;
//         image.anisotropy = renderer.capabilities.getMaxAnisotropy();
//         sliderImages.push(image);

//     });

//     let scene = new THREE.Scene();
//     scene.background = new THREE.Color(0x23272A);
//     let camera = new THREE.OrthographicCamera(
//         renderWidth / -2,
//         renderWidth / 2,
//         renderHeight / 2,
//         renderHeight / -2,
//         1,
//         1000
//     );

//     camera.position.z = 1;

//     let mat = new THREE.ShaderMaterial({
//         uniforms: {
//             dispFactor: {
//                 type: "f",
//                 value: 0.0
//             },
//             currentImage: {
//                 type: "t",
//                 value: sliderImages[0]
//             },
//             nextImage: {
//                 type: "t",
//                 value: sliderImages[1]
//             },
//         },
//         vertexShader: vertex,
//         fragmentShader: fragment,
//         transparent: true,
//         opacity: 1.0
//     });

//     let geometry = new THREE.PlaneBufferGeometry(
//         parent.offsetWidth,
//         parent.offsetHeight,
//         1
//     );
//     let object = new THREE.Mesh(geometry, mat);
//     object.position.set(0, 0, 0);
//     scene.add(object);

//     let addEvents = function() {

//         let pagButtons = Array.from(document.getElementById('pagination').querySelectorAll('button'));
//         let isAnimating = false;

//         pagButtons.forEach((el) => {

//             el.addEventListener('click', function() {

//                 if (!isAnimating) {

//                     isAnimating = true;

//                     document.getElementById('pagination').querySelectorAll('.active')[0].className = '';
//                     this.className = 'active';

//                     let slideId = parseInt(this.dataset.slide, 10);

//                     mat.uniforms.nextImage.value = sliderImages[slideId];
//                     mat.uniforms.nextImage.needsUpdate = true;

//                     TweenLite.to(mat.uniforms.dispFactor, 1, {
//                         value: 1,
//                         ease: 'Expo.easeInOut',
//                         onComplete: function() {
//                             mat.uniforms.currentImage.value = sliderImages[slideId];
//                             mat.uniforms.currentImage.needsUpdate = true;
//                             mat.uniforms.dispFactor.value = 0.0;
//                             isAnimating = false;
//                         }
//                     });

//                     let slideTitleEl = document.getElementById('slide-title');
//                     let slideStatusEl = document.getElementById('slide-status');
//                     let nextSlideTitle = document.querySelectorAll(`[data-slide-title="${slideId}"]`)[0].innerHTML;
//                     let nextSlideStatus = document.querySelectorAll(`[data-slide-status="${slideId}"]`)[0].innerHTML;

//                     TweenLite.fromTo(slideTitleEl, 0.5, {
//                         autoAlpha: 1,
//                         y: 0
//                     }, {
//                         autoAlpha: 0,
//                         y: 20,
//                         ease: 'Expo.easeIn',
//                         onComplete: function() {
//                             slideTitleEl.innerHTML = nextSlideTitle;

//                             TweenLite.to(slideTitleEl, 0.5, {
//                                 autoAlpha: 1,
//                                 y: 0,
//                             })
//                         }
//                     });

//                     TweenLite.fromTo(slideStatusEl, 0.5, {
//                         autoAlpha: 1,
//                         y: 0
//                     }, {
//                         autoAlpha: 0,
//                         y: 20,
//                         ease: 'Expo.easeIn',
//                         onComplete: function() {
//                             slideStatusEl.innerHTML = nextSlideStatus;

//                             TweenLite.to(slideStatusEl, 0.5, {
//                                 autoAlpha: 1,
//                                 y: 0,
//                                 delay: 0.1,
//                             })
//                         }
//                     });

//                 }

//             });

//         });

//     };

//     addEvents();

//     window.addEventListener('resize', function(e) {
//         renderer.setSize(renderW, renderH);
//     });

//     let animate = function() {
//         requestAnimationFrame(animate);

//         renderer.render(scene, camera);
//     };
//     animate();
// };

// imagesLoaded(document.querySelectorAll('img'), () => {

//     document.body.classList.remove('loading');

//     const el = document.getElementById('slider');
//     const imgs = Array.from(el.querySelectorAll('img'));
//     new displacementSlider({
//         parent: el,
//         images: imgs
//     });

// });

//  JS VIEW WORK ORDER

$(document).ready(function() {
    $(".wo-parent").click(function() {
        $(".wo-child").toggle(500);
    });
});

$(document).ready(function() {
    $(".po-parent").click(function() {
        $(".po-child").toggle(500);
    });
});

$(document).ready(function() {
    $(".dropbtn").click(function() {
        $("#myDropdown").toggle();
    });
});







var Fn = {
    validaRut: function(rutCompleto) {
        rutCompleto = rutCompleto.replaceAll('.', '')
        console.log(rutCompleto)
        if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rutCompleto)) {
            return false
        }
        var tmp = rutCompleto.split('-');
        var digv = tmp[1];
        var rut = tmp[0];
        if (digv == 'K') digv = 'k';
        return (Fn.dv(rut) == digv);
    },
    dv: function(T) {
        var M = 0,
            S = 1
        for (; T; T = Math.floor(T / 10)) {
            S = (S + T % 10 * (9 - M++ % 6)) % 11;
        }
        return S ? S - 1 : 'k';
    }
}

const rut = document.getElementById('rut')
    // const firstname = document.getElementById('firstname')
    // const lastname = document.getElementById('lastname')
    // const email = document.getElementById('email')
    // const password = document.getElementById('password')
    // const confirmPassword = document.getElementById('confirm-password')
const signupButton = document.getElementById('signup')

if (rut) {
    rut.addEventListener('keyup', function(e) {
        if (Fn.validaRut(rut.value)) {
            console.log('Rut valido')
            rut.classList.add('is-valid')
            rut.classList.remove('is-invalid')
            signupButton.disabled = false;
        } else {
            console.log('Rut invalido')
            rut.classList.add('is-invalid')
            rut.classList.remove('is-valid')
            signupButton.disabled = true;
        }
    })
}





// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

//alert with setTimeout

$('.alert').fadeIn();
setTimeout(function() {
    $(".alert").fadeOut();
}, 2000)


//validate email