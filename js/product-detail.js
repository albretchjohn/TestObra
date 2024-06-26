document.querySelectorAll('.product-img-item').forEach(e => {
    e.addEventListener('click', () => {
        let img = e.querySelector('img').getAttribute('src')
        document.querySelector('#product-img > img').setAttribute('src', img)
    })
})

document.querySelector('#view-all-description').addEventListener('click', () => {
    let content = document.querySelector('.product-detail-description-content')
    content.classList.toggle('active')
    document.querySelector('#view-all-description').innerHTML = content.classList.contains('active') ? 'view less' : 'view all'
})

let products = [
    {
        name: 'Cute GreenGirl ',
        image1: './images/ART2.png',
        image2: './images/2ndpic.png',
        old_price: '₱400',
        curr_price: '₱300'
    },
    {
        name: 'Rattan Basket',
        image1: './images/ART3.png',
        image2: './images/2ndpic.png',
        old_price: '₱400',
        curr_price: '300'
    },
    {
        name: 'Willow Basket',
        image1: './images/ART4.png',
        image2: './images/2ndpic.png',
        old_price: '₱400',
        curr_price: '300'
    },
    {
        name: 'Origami Swan',
        image1: './images/ART7.png',
        image2: './images/2ndpic.png',
        old_price: '₱400',
        curr_price: '300'
    },
    {
        name: 'Clay Bull',
        image1: './images/ART6.png',
        image2: './images/2ndpic.png',
        old_price: '₱400',
        curr_price: '300'
    },
    {
        name: 'Princess Patch',
        image1: './images/ART17.png',
        image2: './images/2ndpic.png',
        old_price: '₱400',
        curr_price: '300'
    },
]

let product_list = document.querySelector('#related-products')

renderProducts = (products) => {
    products.forEach(e => {
        let prod = `
            <div class="col-4 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="${e.image1}" alt="">
                        <img src="${e.image2}" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <a href="./product-detail.html" class="btn-flat btn-hover btn-shop-now">shop now</a>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            ${e.name}
                        </div>
                        <div class="product-card-price">
                            <span><del>${e.old_price}</del></span>
                            <span class="curr-price">${e.curr_price}</span>
                        </div>
                    </div>
                </div>
            </div>
        `
        product_list.insertAdjacentHTML("beforeend", prod)
    })
}

renderProducts(products)