const flags = {
    'Italy':'../image/flags/italy-162326.svg',
    'Turkey':'../image/flags/turkey-26820.svg',
    'Wales': '../image/flags/wales-28516.svg',
    'Switzerland':'../image/flags/switzerland-26891.svg',
    'Belgium':'../image/flags/belgium-162240.svg',
    'Finland':'../image/flags/finland-162294.svg',
    'Russia':'../image/flags/russia-162400.svg',
    'Denmark':'../image/flags/denmark-28459.svg',
    'Netherlands':'../image/flags/netherlands-26885.svg',
    'Ukraine':'../image/flags/ukraine-26179.svg',
    'Austria':'../image/flags/austria-162233.svg',
    'North Macedonia':'../image/flags/country-40341.svg',
    'Czech Republic':'../image/flags/czech-republic-162276.svg',
    'England':'../image/flags/flag-28514.svg',
    'Croatia':'../image/flags/croatia-26888.svg',
    'Scotland':'../image/flags/britain-151038.svg',
    'Sweden':'../image/flags/sweden-162433.svg',
    'Slovakia':'../image/flags/slovakia-26875.svg',
    'Spain':'../image/flags/spain-162428.svg',
    'Poland':'../image/flags/poland-162393.svg',
    'Portugal':'../image/flags/portugal-162394.svg',
    'France':'../image/flags/france-28463.svg',
    'Germany':'../image/flags/germany-31017.svg',
    'Hungary':'../image/flags/hungary-162317.svg'
}
callFetch('matches','groups').then(data=>{
    let matches='';
    let dateObject={
        time:'',
        date:''
    }
    for(let i=0;i<3;i++){
        matches=data[i].matches;
        for(let j=0;j<matches.length;j++){
            let homeParticipant = matches[j].homeParticipant;
            let awayParticipant = matches[j].awayParticipant;
            dateObject.time=matches[j].matchTime;
            dateObject.date=matches[j].matchDate;
            renderMatches(homeParticipant,awayParticipant,dateObject);
        }
    }
});
function renderMatches(homeParticipant,awayParticipant,dateObject){
    console.log(homeParticipant);
    const homeParticipantName = homeParticipant.participantName;
    const awayParticipantName = awayParticipant.participantName;
    if(homeParticipantName==='Italy'||homeParticipantName==='Turkey'||homeParticipantName==='Switzerland'||homeParticipantName==='Wales'){
        renderMatch(0,homeParticipant,awayParticipant,dateObject);
    }else if(homeParticipantName==='Denmark'||homeParticipantName==='Russia'||homeParticipantName==='Belgium'||homeParticipantName==='Finland'){
        renderMatch(1,homeParticipant,awayParticipant,dateObject);
    }else if(homeParticipantName==='Austria'||homeParticipantName==='Ukraine'||homeParticipantName==='Netherlands'||homeParticipantName==='North Macedonia'){
         renderMatch(2,homeParticipant,awayParticipant,dateObject);
    }else if(homeParticipantName==='Czech Republic'||homeParticipantName==='England'||homeParticipantName==='Croatia'||homeParticipantName==='Scotland'){
        renderMatch(3,homeParticipant,awayParticipant,dateObject);
    }else if(homeParticipantName==='Slovakia'||homeParticipantName==='Spain'||homeParticipantName==='Sweden'||homeParticipantName==='Poland'){
        renderMatch(4,homeParticipant,awayParticipant,dateObject);
    }else if(homeParticipantName==='Portugal'||homeParticipantName==='France'||homeParticipantName==='Germany'||homeParticipantName==='Hungary'){
        renderMatch(5,homeParticipant,awayParticipant,dateObject);
    }
}
function renderMatch(index,home,away,dateObject){
    console.log(home);
    const scheduleDOM = document.querySelectorAll('.groupSchedule');
    const matches = scheduleDOM[index].firstElementChild.children;
    let homeTeam, awayTeam, homeFlag, awayFlag;
    for(let i=0;i<matches.length;i++){
        if(!matches[i].classList.contains('rendered')){
            matches[i].classList.add('rendered');
            homeTeam =matches[i].querySelector('.home');
            awayTeam =matches[i].querySelector('.away');
            homeTeam.querySelector('.countryName').innerText=home.participantName;
            awayTeam.querySelector('.countryName').innerText=away.participantName;
            if(flags[home.participantName]){
                homeFlag = document.createElement('img');
                homeFlag.setAttribute('src',flags[home.participantName]);
                homeTeam.appendChild(homeFlag);
                homeTeam.insertBefore(homeFlag,homeTeam.firstElementChild);
                homeTeam.querySelector('.homeScore').innerText=home.score;
            }
            if(flags[away.participantName]){
                awayFlag = document.createElement('img');
                awayFlag.setAttribute('src',flags[away.participantName]);
                awayTeam.appendChild(awayFlag);
                awayTeam.insertBefore(awayFlag,awayTeam.firstElementChild);
                awayTeam.querySelector('.awayScore').innerText=away.score;
            }
            matches[i].querySelector('.date').innerText=dateObject.date+' '+dateObject.time;
            break;
        }
    }
}