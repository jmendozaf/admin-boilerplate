export default function numberFormat(amount, currency='gs', showCurrency = false) {
    if (amount !== '' && amount !== undefined && amount !== 0  && amount !== '0' && amount !== null) {
        if(currency.toString().toUpperCase()==='GS' || currency.toString().toUpperCase()==='PYG'){
            return parseFloat(amount)
                .toFixed(0)
                .replace(',', '.')
                .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ( showCurrency ? ' '+currency : '' );
        }else{
            return parseFloat(amount)
                .toFixed(2)
                .replace('.', ',')
                .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ( showCurrency ? ' '+currency : '' );
        }
    } else {
        return amount;
    }

}

