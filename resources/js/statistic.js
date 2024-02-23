let totalPlants;
let totalSquads;
let totalUsers;

const squadElement = document.getElementById('squads');
const memberElement = document.getElementById('members');
const plantsElement = document.getElementById('trees');

// Function to animate increasing numbers
function animateNumber(element, targetValue) {
    let currentValue = Number(element.textContent);
    const interval = setInterval(() => {
        if (currentValue < targetValue) {
            currentValue++;
            element.textContent = currentValue;
        } else {
            clearInterval(interval);
        }
    }, 10);
}

// Function to append spans to the specified element
function appendSpan(id, finalValue) {
    const valueLength = String(finalValue).length;
    let number = [];
    let splitFinalValue = finalValue.toString().split('')
    console.log(splitFinalValue);
    for (let i = valueLength; i >= 1; i--) {
        const spanElement = document.createElement('span');
        spanElement.id = `${id}[${i}]`;
        spanElement.className = 'mobile:text-[13px] text-[#009245] sansnum-normal';
        if (i === 1) {
            spanElement.classList.add('me-1');
        }
        number.push(`${id}[${i}]`)
        spanElement.textContent = '0';
        document.getElementById(id).prepend(spanElement);
    }
    console.log(number);
    number.reverse().forEach((element, index) => {
        console.log(splitFinalValue[index]);
        let interval = setInterval(() => {
            let factorElement = document.getElementById(element);
            console.log(factorElement);
            let currentValue = parseInt(factorElement.textContent);
            if (currentValue < parseInt(splitFinalValue[index])) {
                factorElement.textContent = currentValue + 1;
            } else {
                clearInterval(interval);
            }
        }, 250);
    }) 
}

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
        console.log(totalPlants, totalSquads, totalUsers);

        appendSpan('members', totalUsers);
        appendSpan('squads', totalSquads);
        appendSpan('trees', totalPlants);

        animateNumber(memberElement, totalUsers);
        animateNumber(squadElement, totalSquads);
        animateNumber(plantsElement, totalPlants);
    } catch (error) {
        console.error(error.message);
        // Handle error gracefully, maybe display an error message to the user
    }
}


fetchData();

