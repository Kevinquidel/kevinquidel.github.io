// Acceder a Firestore y realizar operaciones
var firestore = firebase.firestore();

// Ejemplo: Agregar un nuevo documento a la colección "mensajes"
firestore
  .collection("mensajes")
  .add({
    texto: "Hola, este es un nuevo mensaje",
    fecha: new Date(),
  })
  .then(function (docRef) {
    console.log("Mensaje agregado con ID:", docRef.id);
  })
  .catch(function (error) {
    console.error("Error al agregar el mensaje:", error);
  });

// Ejemplo: Leer los mensajes de la colección "mensajes"
firestore
  .collection("mensajes")
  .get()
  .then(function (querySnapshot) {
    querySnapshot.forEach(function (doc) {
      console.log(doc.id, "=>", doc.data());
    });
  })
  .catch(function (error) {
    console.error("Error al obtener los mensajes:", error);
  });
