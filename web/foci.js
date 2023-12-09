// Példa adatok focijátékosokról
const footballPlayers = [
    { name: 'Cristiano Ronaldo', team: 'Manchester United', image: 'ronaldo.jpg' },
    { name: 'Lionel Messi', team: 'Paris Saint-Germain', image: 'messi.jpg' },
    { name: 'Neymar Jr.', team: 'Paris Saint-Germain', image: 'neymar.jpg' },
    // További játékosok...
];

// Kártyák létrehozása és hozzáadása a DOM-hoz
const cardContainer = document.getElementById('card-container');
let selectedCards = [];

footballPlayers.forEach(player => {
    const card = document.createElement('div');
    card.classList.add('card');

    const image = document.createElement('img');
    image.src = player.image;
    image.alt = player.name;

    const playerName = document.createElement('h2');
    playerName.textContent = player.name;

    const team = document.createElement('p');
    team.textContent = `Team: ${player.team}`;

    card.appendChild(image);
    card.appendChild(playerName);
    card.appendChild(team);

    card.addEventListener('click', () => onCardClick(card, player));

    cardContainer.appendChild(card);
});

function onCardClick(card, player) {
    // Ellenőrizzük, hogy a kártya már kiválasztásra került-e
    if (card.classList.contains('selected')) {
        return;
    }

    // Kiválasztott kártya stílusának változtatása
    card.classList.add('selected');

    // Kiválasztott kártya hozzáadása a kiválasztott kártyák tömbhöz
    selectedCards.push({ card, player });

    // Ellenőrzés, ha két kártya van kiválasztva
    if (selectedCards.length === 2) {
        const [firstCard, secondCard] = selectedCards;
        
        // Ellenőrzés, ha a két kártya ugyanazt a játékost mutatja
        if (firstCard.player.name === secondCard.player.name) {
            // Ha találat van, eltűntetjük a kártyákat
            setTimeout(() => {
                firstCard.card.style.display = 'none';
                secondCard.card.style.display = 'none';
            }, 1000);
        } else {
            // Ha nincs találat, visszaállítjuk a kiválasztott kártyákat
            setTimeout(() => {
                firstCard.card.classList.remove('selected');
                secondCard.card.classList.remove('selected');
            }, 1000);
        }

        // Kiválasztott kártyák tömb ürítése
        selectedCards = [];
    }
}