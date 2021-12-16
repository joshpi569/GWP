function getDiff(datum, datum2){
    datum2 = toDate(datum2);
    datum = toDate(datum);
    
    let diff = Math.abs(datum2 - datum);
    diff /= (1000 * 3600 * 24 * 365)
    diff = (datum2<datum) ? diff*(-1) : diff;
    return diff;
}

function getDiffAkt(datum){
  let aktDatum = new Date();
  
  aktDatum.setHours = 0;
  aktDatum.setMilliseconds = 0;
  aktDatum.setMinutes = 0;
  datum = toDate(datum);
  
  let diff = Math.abs(aktDatum - datum);
  diff /= (1000 * 3600 * 24 * 365)
  diff = (aktDatum<datum) ? diff*(-1) : diff;
  return diff;
}

function toDate(datum){
  let tag = parseInt(datum.substring(8,10));
  let monat = parseInt(datum.substring(5,7));
  let jahr = parseInt(datum.substring(0,4));
  let nDatum = new Date(jahr, monat-1, tag);
  return nDatum;
}