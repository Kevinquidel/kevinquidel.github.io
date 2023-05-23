// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyAzADFmyUiTjaXsFyeqF5K7OcNCQKBVv7Y",
  authDomain: "brainia-dacae.firebaseapp.com",
  databaseURL: "https://brainia-dacae-default-rtdb.firebaseio.com",
  projectId: "brainia-dacae",
  storageBucket: "brainia-dacae.appspot.com",
  messagingSenderId: "1094670608431",
  appId: "1:1094670608431:web:f8f2e47c9c93b256377eda",
  measurementId: "G-ZF2Z8SPYM3"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);