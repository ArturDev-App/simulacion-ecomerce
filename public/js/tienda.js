async function saveProduct() {
    const res = await fetch('/api/productos');
    const data = await res.json();

    const contenedor = document.getElementById("contenedor-productos");

    data.forEach(product => {
        const card = document.createElement('div');
        card.classList.add('producto-card'); // corregido aquí

        card.innerHTML = `
            <img src="${product.imagen_url}" alt="${product.nombre}">
            <h3>${product.nombre}</h3>
            <p>${product.descripcion}</p>
            <p><strong>$${product.precio}</strong></p>
        `;

        contenedor.appendChild(card);
    });
}

saveProduct();
