export default function limitCharecters(text,limit=10) {
    if(text.length>10){
        return text.toString().substring(0, 10 )+'...';
    }

    return text;

}


