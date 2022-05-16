btn.onclick = () => {
    
const axios = require("axios");

const options = {
  method: 'GET',
  url: 'https://tennis-live-data.p.rapidapi.com/players/ATP',
  headers: {
    'X-RapidAPI-Host': 'tennis-live-data.p.rapidapi.com',
    'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});
}
