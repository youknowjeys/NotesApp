<!-- auth.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesApp - Login or Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-notes-gradient {
            background: radial-gradient(circle at center, #d0e7f9 0%, #4d7a97 100%);
        }
        @import url('https://fonts.googleapis.com/css2?family=Ms+Madi&display=swap');
        .font-cursive {
            font-family: 'Ms Madi', cursive;
        }
    </style>
</head>
<body class="bg-notes-gradient h-screen flex flex-col">

    <!-- Area Atas (Gradient & Teks kecil) -->
    <div class="flex-grow flex flex-col items-center justify-center text-center px-4 pt-10 pb-16">
        <h1 class="text-4xl font-cursive text-white mb-3">NotesApp</h1>
        <p class="text-white opacity-80 text-sm max-w-xs">want to keep your secret? register here!</p>
    </div>

    <!-- Area Bawah (Panel Putih Melengkung) -->
    <div class="bg-white rounded-t-[40px] px-8 pt-12 pb-10 shadow-2xl mt-auto">
        
        <!-- Tombol Utama -->
        <div class="flex gap-4 justify-center mb-8">
            <button class="bg-[#A0B0C0] text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-[#8da0b3]">New account</button>
            <a href="./dashboard.html" class="bg-[#A0B0C0] text-white px-10 py-3 rounded-full text-sm font-medium hover:bg-[#8da0b3]">Login</a>
        </div>

        <!-- Teks Deskripsi -->
        <p class="text-xs text-center text-gray-700 leading-relaxed max-w-sm mx-auto mb-10">
            This login is useful for saving notes that you have recorded in this apk, we hope you don't miss this.
        </p>

        <!-- Garis Pemisah "Sign in with" -->
        <div class="relative flex py-3 items-center mb-6">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="flex-shrink mx-4 text-xs text-gray-500 font-medium">Sign in with</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>

        <!-- Ikon Media Sosial -->
    <div class="flex gap-6 justify-center">
    <!-- Facebook -->
    <button class="hover:scale-110 transition duration-300">
        <img src="./facebook.png" alt="Facebook" class="w-8 h-8 object-contain">
    </button>
    
    <!-- Google -->
    <button onclick="loginWithGoogle()" class="hover:scale-110 transition duration-300">
        <img src="./google.png" alt="Google" class="w-8 h-8 object-contain">
    </button>

    <!-- Apple -->
    <button class="hover:scale-110 transition duration-300">
        <img src="./apple.png" alt="Apple" class="w-8 h-8 object-contain">
    </button>
    </div>
    </div>
    <script type="module">
        // Import Firebase SDK
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
        import { getAuth, signInWithPopup, GoogleAuthProvider } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";

        // Ganti data di bawah ini dengan konfigurasi dari Firebase Console kamu
        const firebaseConfig = {
            apiKey: "AIzaSyBmP8ZPkeyWiQJMbmuNbFUxb8ZmrgNrKIA", // Masukkan API Key asli kamu di sini
            authDomain: "notesapp-49f62.firebaseapp.com",
            projectId: "notesapp-49f62",
            storageBucket: "notesapp-49f62.firebasestorage.app",
            messagingSenderId: "55636102699",
            appId: "1:55636102699:web:8615a4d76c93b6ab6d646e"
        };

        // Inisialisasi Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);
        const provider = new GoogleAuthProvider();

        // Fungsi Global agar bisa dipanggil dari atribut onclick di tombol
        window.loginWithGoogle = function() {
            signInWithPopup(auth, provider)
                .then((result) => {
                    const user = result.user;
                    console.log("User Berhasil Login:", user.displayName);
                    
                    // Simpan data ke browser
                    localStorage.setItem("userName", user.displayName);
                    
                    // Arahkan ke dashboard
                    window.location.href = "dashboard.php";
                })
                .catch((error) => {
                    console.error("Gagal Login:", error.message);
                    alert("Login Gagal: " + error.message);
                });
        };
    </script>
</body>
</html>