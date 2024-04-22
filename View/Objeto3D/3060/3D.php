<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo 3D</title>
</head>
<body>
    <!-- Carga Three.js, GLTFLoader y OrbitControls desde CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/controls/OrbitControls.js"></script>

    <script>
        // Configura la escena y la cámara con Three.js
        var scene = new THREE.Scene();
        scene.background = new THREE.Color(0xaaaaaa); // Color de fondo de la escena

        var camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 1000);
        var renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Carga el modelo GLB
        var loader = new THREE.GLTFLoader();
        var interactiveObject; // Objeto para la interactividad

        loader.load('rtx_titan/titan.gltf', function (gltf) {
            // Ajusta la escala del modelo
            gltf.scene.scale.set(2, 2, 2); // Puedes ajustar estos valores según sea necesario
            scene.add(gltf.scene);

            // Objeto para la interactividad (puedes ajustar la posición)
            interactiveObject = new THREE.Mesh(new THREE.BoxGeometry(3, 3, 3), new THREE.MeshBasicMaterial({ transparent: true, opacity: 0 }));
            interactiveObject.position.copy(gltf.scene.position);
            scene.add(interactiveObject);

            console.log("Modelo cargado correctamente");
        });

        // Configura el controlador de órbita
        var controls = new THREE.OrbitControls(camera, renderer.domElement);

        // Ajusta la posición inicial de la cámara
        camera.position.z = 10;

        // Desactiva la animación automática
        controls.enableDamping = false;

        // Renderiza la escena
        function animate() {
            requestAnimationFrame(animate);

            // Actualiza el controlador
            controls.update();

            renderer.render(scene, camera);
        }

        // Agrega eventos de ratón para mover la cámara y mostrar información
        var raycaster = new THREE.Raycaster();
        var mouse = new THREE.Vector2();

        function onMouseMove(event) {
            console.log("Movimiento del ratón detectado");

            // Calcula las coordenadas normalizadas del ratón
            mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

            // Actualiza el raycaster
            raycaster.setFromCamera(mouse, camera);

            // Verifica la intersección con el objeto interactivo
            var intersects = raycaster.intersectObject(interactiveObject);

            if (intersects.length > 0) {
                // Muestra tu mensaje o realiza alguna acción cuando el cursor esté sobre el objeto interactivo
                console.log("¡Estás sobre el objeto!", intersects);
            }
        }

        window.addEventListener('mousemove', onMouseMove, false);

        animate();
    </script>
</body>
</html>






