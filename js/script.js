
const cvContainer = document.getElementById("cv-container");

const getData = async () => {
  const response = await fetch("https://randomuser.me/api/?inc=name,email,location,phone,picture&noinfo");
  const data = await response.json();
  return data;
};

const displayCV = (data) => {
  const name = `${data.results[0].name.first} ${data.results[0].name.last}`;
  const email = data.results[0].email;
  const phone = data.results[0].phone;
  const city = data.results[0].location.city;
  const picture = data.results[0].picture.large;
  
  const cv = `
    <div class="section">
      <h2>${name}</h2>
      <p>${email}</p>
      <p>${phone}</p>
      <p>${city}</p>
      <img src="${picture}" alt="Profile Picture">
    </div>
    <div class="section">
      
	  <h1>Programador y diseñador Web </h1>
	  <h3>Estudios Academicos: </h3>
      <p>Universidad de Edimburgo, 2010-2014</p>
      <p>Terciario Flores Kindom, 2014-2016</p>
   <p> Escuela Primaria del Prado,1986-1989</p>
    
    </div>
    <div class="section">
      <h3>Experiencia laboral</h3>
      <p>Software Engineer, 2018-2020</p>
      <p>Junior Developer Software, 2021-2020</p>
    </div>
    <div class="section">
      <h3>Conocimientos avanzados: </h3>
      <ul class="skills">
      
        <li>JavaScript</li>
        <li>PHP</li>
        <li>CSS</li>
        <li>HTML</li>
        <li>React</li>
        <li>Node.js</li>
        <li>Phyton</li>
        
        
      </ul>
  <li> Curriculum Vitae 2023</li>
    <p>Disponibilidad: Full Time</p>
    <H6> Copyright 2023. Trabajo Practico N1 para ARGENTINA PROGRAMA 4.0, Buenos aires, Argentina.</H6>
    
   </div>
  `;
  
  cvContainer.innerHTML = cv;
};

getData().then((data) => {
  displayCV(data);
});

