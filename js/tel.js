document.addEventListener('DOMContentLoaded', () => {

	const selectDrop = document.querySelector('#nationality');
	// const selectDrop = document.getElementById('countries');
  
  
	fetch('https://restcountries.com/v3.1/all').then(res => {
	  return res.json();
	}).then(data => {
	  let output = "";
	  data.forEach(country => {
		output += `
		
		<option value="${country.name.common}">${country.name.common}</option>`;
	  })
	   
	  selectDrop.innerHTML = output;
	}).catch(err => {
	  console.log(err);
	})
  
  
  });