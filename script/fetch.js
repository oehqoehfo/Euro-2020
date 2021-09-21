/*function callFetch(matches,rounds){

}*/
async function callFetch(matches,rounds){
    let returnData=null;
    let fetchURL='';
    if(rounds==='tournament'){
        fetchURL='../matches.php?rounds='+rounds;
    }else{
        fetchURL='../matches/matches.php?rounds='+rounds;
    }
    
    const response = await fetch(fetchURL,{
        method:'GET',
        headers: {
            'Content-Type': 'application/json',
            'Content-Type': 'application/x-www-form-urlencoded'
          },
    });
    returnData = response.json();
    return returnData;
}