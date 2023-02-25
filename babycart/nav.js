let shop = document.getElementById("product_item")
let shopItem = [
    {
        name: "productname",
        id: "product1",
        price: 200,
        img: "img/1.png"
    },
    {
        name: "productname",
        id: "product2",
        price: 150,
        img: "img/2.png"
    },
    {
        name:"productname" ,
        id:"product3" ,
        price:100 ,
        img:"img/3.png"
    } 
    ,
    { 
        name:"productname" ,
        id:"product4" ,
        price:130 ,
        img:"img/4.png"
    
    }
]
let busket = JSON.parse(localStorage.getItem('data')) || [];
let shops = () => {
    return (shop.innerHTML = shopItem.map((x) => {
        let { name, price, id, img } = x;
        let search = busket.find((x) => x.id === id) || [];
        return ` 
        <div class="pro" id="${id}">
        <img width="80px" src="${img}" alt="">
        <div class="name">
            <div class="name_price">
                <p>${name}</p>
                <h2 class="pg" id="price"><i class="fa-solid fa-indian-rupee-sign"></i>${price}</h2>
            </div>
            <div class="qu">
            <i onclick="inc(${id})" class="fa-solid fa-minus"></i>
            <div  id="pro${id}">${search.item === undefined ? 0 : search.item}</div>
            <i  onclick="myFunction(${id})"  class="fa-regular fa-plus"></i>

            </div>
        </div> 
        <div class="remove_amount"> 
            <div id="tot">${price * search.item}</div> 
            <div onclick="remove(${id})" id="remove"><i class="fa-sharp fa-solid fa-xmark"></i></div>
        </div>
        </div> 
        
        `
    }).join(""))
}
shops()
let myFunction = (id) => {
    let s = id.id 
    console.log(s)
    let search = busket.find((x) => x.id === s)
    if (search === undefined) {
        busket.push(
            {
                id: s,
                item: 1
            }
        )
    }
    else {
        search.item += 1
    }
    // console.log(busket)
    localStorage.setItem('data', JSON.stringify(busket))
    update(s) 
    totalprice()
    shops() 
}
let inc = (id) => {
    let s = id.id
    let search = busket.find((x) => x.id === s)
    if (search === undefined) {
        return;
    }
    else if (search.item === 0) {
        return;
    }
    else {
        search.item -= 1
    }
    // console.log(busket)
    update(s)
    busket = busket.filter((x) => x.item !== 0)
    shops()
    localStorage.setItem('data', JSON.stringify(busket)) 
    totalprice()
}
// the is the update functions 
let update = (id) => {
    let s = id
    // let search=busket.map((x)=>x.id===s) .reduce((x,y)=>x+y,0) 
    let search = busket.find((x) => x.id === s)
    let l = document.getElementById("pro" + s)
    l.innerHTML = search.item
    // document.getElementById("tot").innerHTML=search.item

    amount()

}
let amount = () => {
    let am = busket.map((x) => x.item).reduce((x, y) => x + y, 0)
    document.getElementById("total_item").innerHTML = am
    document.getElementById("cartAmount").innerHTML = am
}
amount()


let remove = (id) => {
    // console.log(id) 
    let select = id
    busket = busket.filter((x) => x.id !== select.id)
    localStorage.setItem('data', JSON.stringify(busket))
    shops()

}
let totalprice = () => {
    let it = busket.map((x) => {
        let { item, id } = x
        let p = shopItem.find((x) => x.id === id) || []
        return item*p.price


    }).reduce((x,y)=>x+y,0) 
    
    document.getElementById("tp").innerHTML=it
    
}
// console.log(totalprice()) 
 
shops()