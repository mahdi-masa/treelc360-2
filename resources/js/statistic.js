let totalPlants;
let totalSquads;
let totalUsers;

// find tree, group and plants html element
let squadElement = document.getElementById('squads');
let memberElement = document.getElementById('members');
let plantsElement = document.getElementById('trees');



async function fetchData() {
    try {
        const response = await fetch('https://api.forms.lc360.ir/api/v1/stats');

        if (!response.ok) {
            throw new Error('Something went wrong with the internet connection');
        }

        const json = await response.json();

        totalPlants = Number(json['total_plants']);
        totalUsers = Number(json['total_users']);
        totalSquads = Number(json['total_squads']);
        
        console.log(totalPlants);
        console.log(totalSquads);
        console.log(totalUsers);
    } catch (error) {
        console.error(error.message);
    }
}

fetchData();



let plantInterval = setInterval(() => {
    if( totalPlants ){
        let currentPlantElement = Number(plantsElement.textContent); // Use textContent instead of innerHTML
        if (currentPlantElement < totalPlants){
            plantsElement.textContent = currentPlantElement + 1; // Update textContent
        } else {
            clearInterval(plantInterval);
        }
    }
}, 10);


let squadInterval = setInterval(() => {
    if( totalSquads ){
        let currentSquadElement = Number(squadElement.textContent); // Use textContent instead of innerHTML
        if (currentSquadElement < totalSquads){
            squadElement.textContent = currentSquadElement + 1; // Update textContent
        } else {
            clearInterval(squadInterval);
        }
    }
}, 10);

let memberInterval = setInterval(() => {
    if( totalUsers ){
        let currentUserElement = Number(memberElement.textContent); // Use textContent instead of innerHTML
        if (currentUserElement < totalUsers){
            memberElement.textContent = currentUserElement + 1; // Update textContent
        } else {
            clearInterval(memberInterval);
        }
    }
}, 10);

