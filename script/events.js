const groups = document.querySelectorAll('#Groups .groups');
for(let i=0;i<groups.length;i++){
    groups[i].addEventListener('click',function(){
        changeGroupViewState(this);
    });
}
function changeGroupViewState(thisElement){
    console.log(thisElement);
    if(thisElement.classList.contains('collapsed')){
        if(document.querySelector('.groups:not(.collapsed)')){
            document.querySelector('.groups:not(.collapsed)').classList.add('collapsed');
        }
        thisElement.classList.remove('collapsed');
    }else{
        thisElement.classList.add('collapsed');
    }
}