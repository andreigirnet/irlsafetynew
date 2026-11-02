document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {
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

        // Automatically adjusts price between €30 (retail) and €27 (bulk 10+ discount)
        recalculatePrices() {
            this.items.forEach(item => {
                if (item.id === 1 || item.id === 'corporate-manual-handling') {
                    // If quantity is 10 or more, apply 10% discount (€27), otherwise regular €30
                    item.price = item.quantity >= 10 ? 27.00 : 30.00;
                }
            });
        },

        cartSubTotal(){
            this.recalculatePrices(); // Ensure prices match quantities before summing
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