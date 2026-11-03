document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {

        // CHANGE PRICES HERE
        regularPrice: 27.00,
        discountedPrice: 24.00,

        items: JSON.parse(localStorage.getItem('cart') || '[]'),

        save() {
            localStorage.setItem('cart', JSON.stringify(this.items))
        },

        addItem(product) {
            let existing = this.items.find(i => i.id === product.id)
            if(existing){
                existing.quantity += Number(product.quantity)
            } else {
                this.items.push({ ...product, quantity: Number(product.quantity) })
            }
            this.recalculatePrices()
            this.save()
        },

        removeItem(id){
            this.items = this.items.filter(i => i.id !== id)
            this.save()
        },

        incrementQty(id){
            let item = this.items.find(i => i.id === id)
            if(item){
                item.quantity += 1;
                this.recalculatePrices()
                this.save()
            }
        },

        decrementQty(id){
            let item = this.items.find(i => i.id === id)
            if(item && item.quantity > 1){
                item.quantity -= 1;
                this.recalculatePrices()
                this.save()
            }
        },

        recalculatePrices() {
            this.items.forEach(item => {
                if (item.id === 1 || item.id === 'corporate-manual-handling') {
                    item.price = item.quantity >= 10
                        ? this.discountedPrice
                        : this.regularPrice;
                }
            });
        },

        cartSubTotal(){
            this.recalculatePrices();
            return this.items.reduce((sum,i)=>sum + i.price * i.quantity, 0)
        },

        cartTotalQty(){
            return this.items.reduce((sum,i)=>sum + i.quantity, 0)
        },

        cartTotal(){
            return this.cartSubTotal().toFixed(2)
        }
    })
})