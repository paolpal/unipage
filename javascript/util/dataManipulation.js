function trasformaData(dataStr) {
    // Oggetto Date per la data di input
    const data = new Date(dataStr);
    
    // Lista dei nomi dei mesi in italiano
    const nomiMesi = [
      "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno",
      "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"
    ];
    
    // Estrai l'anno, il giorno e il mese
    const anno = data.getFullYear();
    const giorno = data.getDate();
    const mese = nomiMesi[data.getMonth()];
    
    // Crea la stringa nel formato desiderato
    const dataFormattata = `${anno}, ${giorno} ${mese}`;
    
    return dataFormattata;
}
