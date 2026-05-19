# TODO

- [ ] Update `dashboard-final.html`:
  - [x] Replace `#notes-container` markup with split containers `#firebase-notes` and `#default-notes`
  - [x] In the Firestore `onSnapshot` logic:
    - [x] Clear only `#firebase-notes` (leave default notes untouched)
    - [x] Append Firebase note elements into `#firebase-notes` (use `appendChild`)
  - [ ] Keep existing edit/modal and trash/listing behavior working
- [ ] Validate in browser:
  - [ ] Default notes always visible
  - [ ] Firebase notes appear above default notes
  - [ ] When Firebase empty, only default notes show



