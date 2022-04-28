export default function dbNumberFormat(number,decimals,thousands=false) {
    if (number !== '' && number !== undefined && number !== 0  && number !== '0' && number !== null) {
        if(thousands === '.'){
            return parseFloat(number)
                .toFixed(decimals)
                .replace(',', thousands)
                .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
        }else{
            return parseFloat(number)
                .toFixed(decimals)
                .replace('.', ',')
                .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
        }
    } else {
        return number;
    }

}
