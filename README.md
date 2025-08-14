Tässä yksinkertainen henkilötietorekisteri, jossa käytetään REST palvelua, kun
  -  Listataan kaikki henkilöt
  - lisätään uusi henkilö
  - muokataan olemassaolevien henkilöiden tietoja
  - poistetaaan henkilötietoja

  - Henkilötiedot tallenetaan mySQL tietokantaa.
  - sekä ylimääräisenä työnä loin yksinkertaisen käyttöliittymän, jossa on lomake, jota kautta henkilötietoja voi muokata, uusia henkilöitä lisätä sekä poista joitakin henkilöitä. 


![Image](https://github.com/user-attachments/assets/acb9691b-df62-4f51-b717-102d5e9f7ecd)

### REST- Rajapinnan URL- linkit

Metodi | URL | Toiminto
-- | -- | --
GET | http://localhost/api/read.php | Näytä kaikki henkilöt
POST | http://localhost/api/create.php | Lisää uusi henkilö
PUT | http://localhost/api/update.php | Muokkaa henkilö
DELETE | http://localhost/api/delete.php | Poista henkilö
