class tournamentClass{
    constructor(data){
        this.rounds=document.querySelectorAll('section.visible');
        this.tournamentData=data;
    }
    loopData= function(){
        const totalTournamentRounds = this.tournamentData.length;
        let matchesInRound, activeRound,matchIndex;
        for(let i=0;i<totalTournamentRounds;i++){
            activeRound=this.rounds[i];
            matchesInRound=this.tournamentData[i].matches;
            console.log(matchesInRound);
            for(let j=0;j<matchesInRound.length;j++){
                matchIndex=j;
                this.setCountryData(activeRound, matchesInRound[j],matchIndex);
                this.setMatchDate(activeRound,matchesInRound[j],matchIndex);
            }
        }
    }
    setCountryData = function(active, matches,index){
        let homeCountry = active.querySelectorAll('.home .countryName')[index];
        console.log(active.querySelectorAll('.home .countryName'));
        let awayCountry = active.querySelectorAll('.away .countryName')[index];
        homeCountry.innerText=matches.homeParticipant.participantName;
        awayCountry.innerText=matches.awayParticipant.participantName;
        active.querySelectorAll('.homeScore')[index].innerText=matches.homeParticipant.score;
        active.querySelectorAll('.awayScore')[index].innerText=matches.awayParticipant.score;
        let flags = this.getCountryFlag(matches.homeParticipant.participantName,matches.awayParticipant.participantName);
        this.renderCountryFlag(active,flags,index);
    }
    setMatchDate = function(active,match, index){
        active.querySelectorAll('.date')[index].innerText=match.matchDate +' '+match.matchTime;
    }
    getCountryFlag = function(homeParticipant,awayParticipant){
        let flag, homeFlag, awayFlag;
        for(let i=0;i<arguments.length;i++){
            switch(arguments[i]){
                case 'Italy':
                    flag='../../image/flags/italy-162326.svg';
                    break;
                case 'Spain':
                    flag='../../image/flags/spain-162428.svg';
                    break;
                case 'Sweden':
                    flag='../../image/flags/sweden-162433.svg';
                    break;
                case 'Germany':
                    flag='../../image/flags/germany-31017.svg';
                    break;
                case 'Switzerland':
                    flag='../../image/flags/switzerland-26891.svg';
                    break;
                case 'Ukraine':
                    flag='../../image/flags/ukraine-26179.svg';
                    break;
                case 'Portugal':
                    flag='../../image/flags/portugal-162394.svg';
                    break;
                case 'Austria':
                    flag='../../image/flags/austria-162233.svg';
                    break;
                case 'Croatia':
                    flag='../../image/flags/croatia-26888.svg';
                    break;
                case 'Netherlands':
                    flag='../../image/flags/netherlands-26885.svg';
                    break;
                case 'Czech Republic':
                    flag='../../image/flags/czech-republic-162276.svg';
                    break;
                case 'Belgium':
                    flag='../../image/flags/belgium-162240.svg';
                    break;
                case 'Wales':
                    flag='../../image/flags/wales-28516.svg';
                    break;
                case 'Denmark':
                    flag='../../image/flags/denmark-28459.svg';
                    break;
                case 'England':
                    flag='../../image/flags/flag-28514.svg';
                    break;
                case 'France':
                    flag='../../image/flags/france-28463.svg';
                    break;
                default:
                    flag='';
                    break;
            }
            if(i===0){
                homeFlag=flag;
            }else{
                awayFlag=flag;
            }
        }
        return{
            'homeFlag':homeFlag,
            'awayFlag':awayFlag
        }
    }
    renderCountryFlag = function(active,flags,index){
        let homeFlagTag, awayFlagTag;
        if(flags.homeFlag!==''){
            homeFlagTag = document.createElement('img');
            homeFlagTag.setAttribute('src',flags.homeFlag);
            active.querySelectorAll('.home')[index].insertBefore(homeFlagTag,active.querySelectorAll('.home')[index].firstChild);
        }
        if(flags.awayFlag!=''){
            awayFlagTag = document.createElement('img');
            awayFlagTag.setAttribute('src',flags.awayFlag);
            active.querySelectorAll('.away')[index].insertBefore(awayFlagTag,active.querySelectorAll('.away')[index].firstChild);
        }
        
    }
}
