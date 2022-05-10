// MY ACCOUNT BUTTONS 
const statusButton = document.getElementById('status');
const personalButton = document.getElementById('personalInfo');
const emergencyButton = document.getElementById('emergency');
const myProfileButton = document.getElementById('myProfile');


// MY ACCOUNTS' CONTAINERS
const statusContainer = document.getElementById('status-container');
const personalContainer = document.getElementById('personalInfo-container');
const emergencyContainer = document.getElementById('emergency-container');
const profileContainer = document.getElementById('profile-container');


// STATUS BUTTON IS CLICKED
statusButton.addEventListener('click', (e) => {
   //Status
   statusButton.style.background = 'var(--PrimaryColor)';
   statusButton.style.color = '#fff';
   statusContainer.style.display = 'flex';

   //Personal Information
   personalButton.style.background = '#fff';
   personalButton.style.color = '#000';
   personalContainer.style.display = 'none';

   // In case of emergency
   emergencyButton.style.background = '#fff';
   emergencyButton.style.color = '#000';
   emergencyContainer.style.display = 'none';

   // Profile
   myProfileButton.style.background = '#fff';
   myProfileButton.style.color = '#000';
   profileContainer.style.display = 'none';
});


// PROFILE BUTTON IS CLICKED
personalButton.addEventListener('click', (e) => {
   //Status
   statusButton.style.background = '#fff';
   statusButton.style.color = '#000';
   statusContainer.style.display = 'none';

   //Personal Information
   personalButton.style.background = 'var(--PrimaryColor)';
   personalButton.style.color = '#fff';
   personalContainer.style.display = 'flex';

   // In case of emergency
   emergencyButton.style.background = '#fff';
   emergencyButton.style.color = '#000';
   emergencyContainer.style.display = 'none';

   // Profile
   myProfileButton.style.background = '#fff';
   myProfileButton.style.color = '#000';
   profileContainer.style.display = 'none';
});

// EMERGENCY BUTTON IS CLICKED
emergencyButton.addEventListener('click', (e) =>{
   //Status
   statusButton.style.background = '#fff';
   statusButton.style.color = '#000';
   statusContainer.style.display = 'none';

   //Personal Information
   personalButton.style.background = '#fff';
   personalButton.style.color = '#000';
   personalContainer.style.display = 'none';

   // In case of emergency
   emergencyButton.style.background = 'var(--PrimaryColor)';
   emergencyButton.style.color = '#fff';
   emergencyContainer.style.display = 'flex';

   // Profile
   myProfileButton.style.background = '#fff';
   myProfileButton.style.color = '#000';
   profileContainer.style.display = 'none';
});

// PROFILE BUTTON IS CLICKED
myProfileButton.addEventListener('click', (e) => {
   //Status
   statusButton.style.background = '#fff';
   statusButton.style.color = '#000';
   statusContainer.style.display = 'none';

   //Personal Information
   personalButton.style.background = '#fff';
   personalButton.style.color = '#000';
   personalContainer.style.display = 'none';

   // In case of emergency
   emergencyButton.style.background = '#fff';
   emergencyButton.style.color = '#000';
   emergencyContainer.style.display = 'none';

   // Profile
   myProfileButton.style.background = 'var(--PrimaryColor)';
   myProfileButton.style.color = '#fff';
   profileContainer.style.display = 'flex';

});

