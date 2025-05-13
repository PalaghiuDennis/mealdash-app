# 🍽️ MealDash – Aplicație Web pentru Livrare de Mâncare

**Autor:** Palaghiu Dennis-Nicolae  
**Universitatea din Pitești – Facultatea de Științe, Educație Fizică și Informatică**  
**Lucrare de licență – 2023**

---

## 📋 Descriere

**MealDash** este o aplicație web destinată gestionării comenzilor de mâncare. Platforma oferă două interfețe: una pentru utilizatori (clienți) și alta pentru administratori (restaurante sau manageri de sistem). Utilizatorii pot comanda mâncare, vizualiza istoricul comenzilor și edita profilul personal, în timp ce administratorii pot gestiona meniul, clienții, comenzile și angajații.

Acest proiect a fost dezvoltat ca parte a lucrării de licență și evidențiază integrarea tehnologiilor web moderne pentru crearea unui sistem complet funcțional.

---

## 🧰 Tehnologii utilizate

### Front-End
- HTML5
- CSS3
- JavaScript
- jQuery
- Material Icons

### Back-End
- PHP
- MySQL (gestionată cu phpMyAdmin)
- XAMPP (Apache, MySQL, PHP)
- Visual Studio Code

---

## ⚙️ Funcționalități

### Utilizatori
- ✅ Autentificare și înregistrare
- ✅ Vizualizarea meniului
- ✅ Adăugare produse în coș și plasare comandă
- ✅ Istoric comenzi
- ✅ Gestionare profil

### Administratori
- ✅ Autentificare
- ✅ Administrare produse/mâncare (CRUD)
- ✅ Gestionare clienți
- ✅ Gestionare comenzi (status, livrare)
- ✅ Gestionare angajați

---

## 🧱 Structura bazei de date

Baza de date `MealDash` conține următoarele tabele principale:

- `Clienti`: date despre utilizatori
- `Comenzi`: informații despre comenzile plasate
- `Comanda_Elemente`: produse individuale din fiecare comandă
- `Mancare`: produse disponibile
- `Angajati`: personalul administrativ și livratorii
  
![image](https://github.com/user-attachments/assets/f59bfad8-b9d3-4554-b6a2-13122ecbb0b1)

---

## 💻 Instalare locală

1. Instalează [XAMPP](https://www.apachefriends.org/index.html)
2. Clonează proiectul în `htdocs`:
   ```bash
   git clone https://github.com/username/meal-dash.git
   ```
3. Importă baza de date în `phpMyAdmin` din fișierul `MealDash.sql`
4. Verifică datele din `connection.php` (user: `root`, parola: `""`)
5. Deschide aplicația în browser:  
   👉 `http://localhost/meal-dash`

---

## 🚀 Funcționalități viitoare (opționale)

- [ ] Integrare plată online
- [ ] Notificări prin email
- [ ] Sistem de rating pentru produse
- [ ] Dashboard statistic pentru admini
- [ ] Export date în Excel

---

## 📄 Licență

Acest proiect este destinat uzului academic. Codul poate fi reutilizat în scop educativ cu menționarea autorului.

---

## 📬 Contact

Pentru întrebări sau sugestii, mă poți contacta la:  
📧 **dennispalaghiu@gmail.com**  
📍 **Pitești, România**
