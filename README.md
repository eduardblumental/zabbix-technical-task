# zabbix-technical-task

## Uzd. 1

_1) Uzrakstiet test cases reģistrācijas formai. Formas veids ir vēstules pielikumā. Lūdzu uzrakstiet pēc iespējas vairāk variantus, kuri tik var nākt prātā._

### 1. **Lauks "Vārds"**

#### a) Boundary and Length Testing

**Test Case 1:** Minimālais vārda garums (piemēram, 3 simboli)

- Ievadīt vienu simbolu: "Abc".
- **Rezultāts:** Vārds tiek pieņemts.

**Test Case 2:** Maksimālais vārda garums (piemēram, 30 simboli)

- Ievadīt 30 simbolus: "AaaaaaaaBbbbbbbbCcccccccDdddddd".
- **Rezultāts:** Vārds tiek pieņemts.

**Test Case 3:** Vārds ar mazāk nekā 3 simboliem

- Ievadīt 2 simbolus: "Ab".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka vārds ir par īsu.

**Test Case 4:** Vārds ar vairāk nekā 30 simboliem

- Ievadīt 31 simbolu: "AaaaaaaaBbbbbbbbCcccccccDddddddE".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka vārds ir par garu.

#### b) Special Symbols Testing

**Test Case 5:** Vārds ar speciālajiem simboliem

- Ievadīt vārdu ar speciāliem simboliem: "Jānis$".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka vārds nedrīkst saturēt speciālos simbolus.

**Test Case 6:** Vārds ar atstarpēm

- Ievadīt vārdu ar atstarpēm: "Jānis Pēteris".
- **Rezultāts:** Vārds tiek pieņemts.

#### c) Empty Field Testing

**Test Case 7:** Tukšs vārda lauks

- Atstāt vārda lauku tukšu.
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka vārds ir obligāts lauks.

---

### 2. **Lauks "Uzvārds"**

#### a) Boundary and Length Testing

**Test Case 8:** Minimālais uzvārda garums

- Ievadīt vienu simbolu: "B".
- **Rezultāts:** Uzvārds tiek pieņemts.

**Test Case 9:** Maksimālais uzvārda garums (piemēram, 30 simboli)

- Ievadīt 30 simbolus: "LllllllllMmmmmmmmNnnnnnnnOoooooo".
- **Rezultāts:** Uzvārds tiek pieņemts.

**Test Case 10:** Vārds ar mazāk nekā 3 simboliem

- Ievadīt 2 simbolus: "Ab".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka uzvārds ir par īsu.

**Test Case 11:** Uzvārds ar vairāk nekā 30 simboliem

- Ievadīt 31 simbolu: "LllllllllMmmmmmmmNnnnnnnnOooooooP".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka uzvārds ir par garu.

#### b) Special Symbols Testing

**Test Case 12:** Uzvārds ar simboliem

- Ievadīt uzvārdu ar simboliem: "Kalniņš!".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka uzvārds nedrīkst saturēt speciālos simbolus.

**Test Case 13:** Uzvārds ar defisi

- Ievadīt uzvārdu ar defisi: "Ozoliņš-Kalniņš".
- **Rezultāts:** Uzvārds tiek pieņemts.

#### c) Empty Field Testing

**Test Case 14:** Tukšs uzvārda lauks

- Atstāt uzvārda lauku tukšu.
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka uzvārds ir obligāts lauks.

---

### 3. **Lauki "Telefons" un "E-pasts"**

#### a) Valid Format Testing

**Test Case 15:** Derīgs e-pasts

- Ievadīt derīgu e-pasta adresi: "janis.berzins@example.com".
- **Rezultāts:** E-pasts tiek pieņemts.

**Test Case 16:** Derīgs telefona numurs

- Ievadīt derīgu telefona numuru: "+37123456789".
- **Rezultāts:** Telefons tiek pieņemts.

#### b) Invalid Format Testing

**Test Case 17:** Nederīgs e-pasta formāts (bez @)

- Ievadīt: "janis.berzins.example.com".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums par nederīgu e-pasta formātu.

**Test Case 18:** Nederīgs telefona numurs (pārāk īss)

- Ievadīt: "+3712345".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums par nederīgu telefona numuru.

**Test Case 19:** Nederīgs telefona numurs ar burtiem

- Ievadīt: "+371abcdefg".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums par nederīgu telefona numuru.

#### c) Empty Field Testing

**Test Case 20:** Tukšs telefona vai e-pasta lauks

- Atstāt lauku tukšu.
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka lauks ir obligāts.

---

### 4. **Lauks "Parole"**

#### a) Boundary and Length Testing

**Test Case 21:** Minimālā paroles garums (piemēram, 6 simboli)

- Ievadīt: "123456".
- **Rezultāts:** Parole tiek pieņemta.

**Test Case 22:** Parole ar mazāk nekā 6 simboliem

- Ievadīt: "123".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka parolei jābūt vismaz 6 simbolus garai.

#### b) Special Characters Testing

**Test Case 23:** Parole ar speciālajiem simboliem

- Ievadīt: "Parole!@#".
- **Rezultāts:** Parole tiek pieņemta.

**Test Case 24:** Parole ar atstarpēm

- Ievadīt: "Parole 123".
- **Rezultāts:** Parole tiek pieņemta.

---

### 5. **Lauks "Dzimšanas datums"**

#### a) Boundary Testing

**Test Case 25:** Minimālais pieļaujamais vecums (piemēram, 14 gadi)

- Izvēlēties datumu: 18. septembris 2010 (lietotājam ir 14 gadi).
- **Rezultāts:** Reģistrācija tiek pieņemta.

**Test Case 26:** Vecums mazāks par minimālo pieļaujamo vecumu

- Izvēlēties datumu: 18. septembris 2011 (lietotājam ir 13 gadi).
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka vecums ir mazāks par minimālo pieļaujamo vecumu.

**Test Case 27:** Nākotnes datuma izvēle

- Izvēlēties datumu: 18. septembris 2025.
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka nākotnes datums nav pieņemams.

---

### 6. **Lauks "Dzimums"**

#### a) Selection Testing

**Test Case 28:** Izvēlēts dzimums "Vīrietis"

- Izvēlēties opciju "Vīrietis".
- **Rezultāts:** Opcija tiek pieņemta.

**Test Case 29:** Izvēlēts dzimums "Sieviete"

- Izvēlēties opciju "Sieviete".
- **Rezultāts:** Opcija tiek pieņemta.

**Test Case 30:** Izvēlēts dzimums "Ne-binārs"

Izvēlēts "Pielāgots" dzimums un ievadīt dzimumu "Ne-binārs"

- **Rezultāts:** Opcija tiek pieņemta.

**Test Case 31:** Izvēlēts "Pielāgots" dzimums un tukšs pielāgotā lauks

- Izvēlēties "Pielāgots" dzimums un atstāt lauku tukšu.
- **Rezultāts:** Tiek parādīts kļūdas ziņojums, ka lauks ir jāaizpilda.

#### b) Special Symbols Testing

**Test Case 32:** Ievadīt dzimumu ar simboliem

- Izvēlēties "Pielāgots" dzimums un ievadīt: "Ne-binārs!".
- **Rezultāts:** Tiek parādīts kļūdas ziņojums par nederīgiem simboliem.

---

### 7. **Poga "Reģistrēties"**

**Test Case 33:** Noklikšķināt uz pogas bez lauku aizpildīšanas

- Atstāt visus laukus tukšus un noklikšķināt uz "Reģistrēties".
- **Rezultāts:** Tiek parādīti kļūdas ziņojumi, kas norāda, ka visiem laukiem jābūt aizpildītiem.

**Test Case 34:** Noklikšķināt uz pogas ar visiem laukiem pareizi aizpildītiem

- Aizpildīt visus laukus ar derīgu informāciju un noklikšķināt uz "Reģistrēties".
- **Rezultāts:** Reģistrācija ir veiksmīga.

## Uzd. 2

_Mums ir sekojošs masīvs: $objects = [4, 5, -3, 15, -2, 19, 6, -2, -4, 20, -17]_

_Uzrakstīt funkciju, kura aprēķinās, cik pozitīvo, negatīvo, pāra un nepāra skaitļu ir masīvā. Rezultātu pierakstīt sekojošā veidā "Array has x negative, y positive, z odd and w even numbers", kur x, y, z, w ir aprēķina rezultāti._

Lai palaistu funkciju, pārliecinieties, ka Jūsu datorā ir uzstādīts PHP, un izmantojiet komandu:
bash`php counter.php`
