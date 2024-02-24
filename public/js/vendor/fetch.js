async function products() {
    const res = await fetch("/js/vendor/products.json");
    const data = await res.json();

    console.log(data);
}

products();
