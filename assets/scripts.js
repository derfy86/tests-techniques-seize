const app = {

  base_url: 'http://localhost/exercice',

  defaultErrorMessage: 'Désolé un problème est survenu, veuillez réessayer ultérieurement',

  init: function () {
    console.log('app.init !');
    app.addListenerToActions();
  },

  getUserInfos: function(document) {
    const lastName = document.getElementById('nom').value;
    const firstName = document.getElementById('prenom').value;
    const phone = document.getElementById('tel').value;
    const email = document.getElementById('email').value;
    const infos = {
      infos: 'infos',
      nom: lastName,
      prénom: firstName,
      numéro: phone,
      email
    };
    return infos;
  },

  checkInputFields: function(infos) {
    // vérification des champs qui ne sont pas remplis
    for (const info in infos) {
      if (infos[info] === "") {
        const errorLine = document.getElementById('errorLine');
        const line = app.initLine(info);
        errorLine.appendChild(line);
      }
    }
  },

  initLine: function(info) {
    // creation d'une ligne d'erreur
    const line = document.createElement("p");
    line.className = "errorLine";
    line.style.textAlign = 'left';
    line.textContent = '- Votre ' + info + ' est vide';
    return line;
  },

  addListenerToActions: function () {
    // ecouteur d'evenement
    const handleSubmitForm = document.getElementById('form');
    handleSubmitForm.addEventListener('submit', async function(event){
      event.preventDefault();
      const checkError = document.querySelectorAll('.errorLine');
      if(checkError){
        for (const error of checkError){
          error.remove();
        }
      }
      const infos = app.getUserInfos(document);
      // test des champs
      app.checkInputFields(infos);
      if(infos.nom && infos.prénom && infos.email && infos.numéro && infos.infos !== undefined){
        await app.callProcessForm(infos);
        handleSubmitForm.reset()
      }
    });
  },

  callProcessForm: async function (infos) {
    try {
      const response = await fetch(app.base_url + '/inc/process-form.php');
      if (response.status !== 200) {
        const error = await response.json();
        throw error;
      }
      // résultat du fetch
      console.log(`response`, response)
      // fait apparaitre modal et disparaitre le formulaire
      document.getElementById('modal').style.display = 'block';
      document.querySelector('.container--center').style.display = 'none';
      // dynamique des infos utilisateur de la modal
      document.querySelector('.firstName').textContent = infos.nom;
      document.querySelector('.lastName').textContent = infos.prénom;
      document.querySelector('.number').textContent = infos.numéro;
      document.querySelector('.email').textContent = infos.email;
    } catch (error) {
      alert(app.defaultErrorMessage);
      console.error(error);
    }
  },

};
  
document.addEventListener('DOMContentLoaded', app.init);




