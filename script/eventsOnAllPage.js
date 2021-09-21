class domClass{
    constructor(){
        document.getElementById('Hamburger').addEventListener('click',(e)=>this.toggleMenu(e));
    }
    toggleMenu(event){
        const target = event.currentTarget;
        if(target.classList.contains('toggled')){
            target.classList.remove('toggled');
        }else{
            target.classList.add('toggled');
        }
    }
}
const dom = new domClass();