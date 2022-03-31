function initializeApp() {
  const firebaseConfig = {
    apiKey: config.API_KEY,
    authDomain: "portfolio-email-subs.firebaseapp.com",
    databaseURL: "https://portfolio-email-subs-default-rtdb.firebaseio.com",
    projectId: "portfolio-email-subs",
    storageBucket: "portfolio-email-subs.appspot.com",
    messagingSenderId: "443744065425",
    appId: "1:443744065425:web:f1bf3591af89c80eb86c30",
    measurementId: "G-S1RHLB1L33",
  };
  // Initialize Firebase

  firebase.initializeApp(firebaseConfig);
  const firestore = firebase.firestore();

  //Form manipulation
  // Listen for form submit
  const form = document.getElementById("contactForm");
  const form_message = document.getElementById("messageForm");
  form.addEventListener("submit", submitForm);
  form_message.addEventListener("submit", submitFormMessage);
  const db = firestore.collection("Subscribers");
  const db_messages = firestore.collection("messages");

  // Submit form
  function submitForm(e) {
    e.preventDefault();

    //Get value
    const mail = document.querySelector("#sub-email");

    // Save message
    saveMail(mail);


    // Clear form
    document.getElementById("contactForm").reset();
  }

  // Save message to firebase
  const saveMail = function (mail) {
    db.add({
      email: mail.value,
    });
  };

  // Submit message form
  function submitFormMessage(e) {
    e.preventDefault();

    //Get value
    const name_field = document.querySelector("#name");
    const email_field = document.querySelector("#email");
    const subject_field = document.querySelector("#subject");
    const message_field = document.querySelector("#message");

    //Save message
    saveMessage(name_field, email_field, subject_field, message_field);

    document.getElementById("messageForm").reset();
  }

  // Save message to firebase

  const saveMessage = function (
    name_field,
    email_field,
    subject_field,
    message_field
  ) {
    db_messages.add({
      name: name_field.value,
      email: email_field.value,
      subject: subject_field.value,
      message: message_field.value,
    });
  };
}
