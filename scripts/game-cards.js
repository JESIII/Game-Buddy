/************************************************/
/* Function: nextPage                           */
/*----------------------------------------------*/
/* - Clear and load next page of games          */
/************************************************/
const nextPage = () => {
	page_count.value = Number(page_count.value) + 1;

	// Clear Page
	var del = document.getElementById('cards');

	while(del.firstChild){
		del.removeChild(del.firstChild);
		console.log('Deleting . . .');
	}
	console.log('Next: ' + page_count.value);

	// Load New Games
	sendHttpRequest('GET', 'https://api.rawg.io/api/games'.concat('?page=',page_count.value));
};

/************************************************/
/* Function: prevPage                           */
/*----------------------------------------------*/
/* - Clear and load prev page of games          */
/************************************************/
const prevPage = () => {
	if(Number(page_count.value) > 1){
		// Clear Page
		page_count.value = Number(page_count.value) - 1;

		var del = document.getElementById('cards');

		while(del.firstChild){
			del.removeChild(del.firstChild);
			console.log('Deleting . . .');
		}

		// Load New Games
		sendHttpRequest('GET', 'https://api.rawg.io/api/games'.concat('?page=',page_count.value));
	}
	console.log('Prev: ' + page_count.value);
};

const printGameTtitle = () => {
	console.log(this.textContent);
};


/************************************************/
/* Function: sendHttpRequest                    */
/*----------------------------------------------*/
/* - Send XMLHttpRequest to get data          */
/************************************************/
const sendHttpRequest = (method, url) => {
	var request = new XMLHttpRequest();

	request.open(method, url);
	
	request.onload = () => {
		var data = JSON.parse(request.response);
	
		data.results.forEach(game => {
			const game_card = document.createElement('div');
			game_card.setAttribute('class', 'card border-secondary mb-3');
	
			// Get Game Name
			const h1 = document.createElement('div');
			h1.setAttribute('class', 'card-header')
			h1.textContent = game.name;
			game_card.title = game.slug;
			game_card.onclick = function(){
				// console.log(String(this.textContent).split(' ').join('-').toLocaleLowerCase())
				console.log(this.title);
				window.location.href = './game.html?title='.concat(this.title);
			};
			
			// Get Game Image
			const img = document.createElement('img');
			img.setAttribute('class', 'background');
			img.src = game.background_image;
	
			game_card.appendChild(img);
			game_card.appendChild(h1);
			container.appendChild(game_card);
		});
	};
	request.send();
};

const app = document.getElementById('root');

const container = document.createElement('div');
container.setAttribute('class', 'container');
container.setAttribute('id', 'cards');

const navCenter = document.createElement('div');

navCenter.setAttribute('class', 'section');

const nextBtn = document.createElement('button');
const prevBtn = document.createElement('button');

nextBtn.setAttribute('class', 'btn btn-secondary');
prevBtn.setAttribute('class', 'btn btn-secondary');

nextBtn.innerHTML = 'Next';
prevBtn.innerHTML = 'Prev';

navCenter.appendChild(prevBtn);
navCenter.appendChild(nextBtn);

const page_count = document.createElement('input');

page_count.type = 'hidden';
page_count.value = 1;

app.appendChild(container);
app.appendChild(navCenter);
app.appendChild(page_count);

/************************************************/
/* Initialize Data                              */
/************************************************/
sendHttpRequest('GET', 'https://api.rawg.io/api/games');

nextBtn.addEventListener('click', nextPage);
prevBtn.addEventListener('click', prevPage);