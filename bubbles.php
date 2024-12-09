<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation avec CSS et JavaScript</title>

    <!-- CDN pour Babel -->
    <script src="https://cdn.jsdelivr.net/npm/@babel/standalone@7.21.4/babel.min.js"></script>

    <style>
.wrapper {
  --itemSize: calc(5rem + 5vw);
  --responsiveness: 0.4;
  --x: 0%;
  --y: 0%;
  --translateX: calc(-50% - var(--x) * var(--responsiveness));
  --translateY: calc(-50% - var(--y) * var(--responsiveness));
  transform: translate(var(--translateX), var(--translateY));
  position: absolute;
  top: 50%;
  left: 50%;
  display: grid;
  justify-content: center;
  font-size: var(--itemSize);
  grid-template-columns: repeat(14, 0.5em);
  grid-auto-rows: 0.5em;
  grid-gap: 0 0.07em;
  scroll-snap-type: mandatory;
}
.wrapper .item:first-of-type, .wrapper .item:nth-of-type(34) {
  grid-column-start: 4;
}
.wrapper .item:nth-of-type(5), .wrapper .item:nth-of-type(29) {
  grid-column-start: 3;
}
.wrapper .item:nth-of-type(10), .wrapper .item:nth-of-type(23) {
  grid-column-start: 2;
}

.item {
  --scale: 1;
  grid-column-end: span 2;
  grid-row-end: span 2;
  height: 1em;
  width: 1em;
  border-radius: 50%;
  background-color: hsl(260, 100%, 60%);
  will-change: transform;
  transform: scale(var(--scale));
  opacity: calc(var(--scale) * var(--scale));
  transition: 0.4s ease-out;
  scroll-snap-align: center;
  box-shadow: 0 0 0.2em 0 rgba(0, 0, 0, 0.2);
}
.item:hover {
  background-color: hsl(260, 50%, 20%);
}

@media screen and (max-width: 1000px) {
  body,
  html {
    position: relative;
    overflow: scroll;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
  }
  .wrapper {
    --itemSize: 10rem;
    --responsiveness: 1;
    position: static;
    justify-content: start;
    transform: scale(0.7);
  }
}

/*# sourceMappingURL=output.css.map */

    </style>
</head>
<body>

    <div class="wrapper"></div>

    <!-- Génération dynamique d'éléments dans la wrapper -->
    <script type="text/babel">
        // Création dynamique de 37 éléments div
        for (let i = 0; i < 37; i++) {
            const div = document.createElement('div');
            div.classList.add('item');
            document.querySelector('.wrapper').appendChild(div);
        }

        const wrapper = document.querySelector('.wrapper');
        const frameRate = 2;
        const minScale = 0.3;
        const maxScale = 1.1;
        const scaleRange = maxScale - minScale;
        let lastFrame;

        // Fonction d'aide pour trier dynamiquement les éléments
        function dynamicSort(property) {
            let sortOrder = 1;

            if (property[0] === "-") {
                sortOrder = -1;
                property = property.substr(1);
            }

            return function (a, b) {
                let result = a[property] < b[property] ? -1 : a[property] > b[property] ? 1 : 0;
                return result * sortOrder;
            }
        }

        function animateChildren(parent, origin) {
            const children = Array.from(parent.children);
            const childrenWithDistances = [];

            children.map(child => {
                const r = child.getBoundingClientRect();
                const childX = r.right - (r.width / 2);
                const childY = r.bottom - (r.height / 2);
                const distanceY = Math.max(origin.y, childY) - Math.min(origin.y, childY);
                const distanceX = Math.max(origin.x, childX) - Math.min(origin.x, childX);
                const hypot = Math.hypot(distanceX, distanceY);

                child.distance = Math.round(hypot);
                childrenWithDistances.push(child);
            });

            childrenWithDistances.sort(dynamicSort('distance')).reverse();

            childrenWithDistances.map((child, index) => {
                const relativeAmt = (index / children.length) * scaleRange;
                child.style.setProperty('--scale', minScale + relativeAmt);
            });
        }

        document.addEventListener('mousemove', function (e) {
            requestAnimationFrame(function (thisFrame) {
                if (thisFrame - lastFrame > frameRate) {
                    const screenCenter = {
                        x: window.innerWidth / 2,
                        y: window.innerHeight / 2
                    };
                    const moveX = e.x - screenCenter.x;
                    const moveY = e.y - screenCenter.y;

                    wrapper.style.setProperty('--x', moveX / 10 + '%');
                    wrapper.style.setProperty('--y', moveY / 10 + '%');

                    animateChildren(wrapper, e);
                }

                lastFrame = thisFrame;
            });
        });

        document.body.addEventListener('scroll', function (e) {
            const screenCenter = {
                x: window.innerWidth / 2,
                y: window.innerHeight / 2
            };

            animateChildren(wrapper, screenCenter);
        });
    </script>

</body>
</html>
