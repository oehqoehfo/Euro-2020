callFetch('matches','tournament').then(data=>{
    const tournamentData = data.splice(3);
    const tournamentVariable = new tournamentClass(tournamentData);
    tournamentVariable.loopData();
});
