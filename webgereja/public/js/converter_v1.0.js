function getDateToContext(datetime, type){
    if(datetime){
        const result = new Date(datetime)

        if (type == "full") {
            const now = new Date(Date.now())
            const yesterday = new Date()
            const tomorrow = new Date()
            yesterday.setDate(yesterday.getDate() - 1)
            tomorrow.setDate(tomorrow.getDate() + 1)
            
            if (result.toDateString() === now.toDateString()) {
                return ` ${messages('today_at')} ${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}`
            } else if (result.toDateString() === yesterday.toDateString()) {
                return ` ${messages('yesterday_at')} ${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}`
            } else if (result.toDateString() === tomorrow.toDateString()) {
                return ` ${messages('tommorow_at')} ${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}`
            } else {
                return ` ${result.getFullYear()}/${(result.getMonth() + 1)}/${("0" + result.getDate()).slice(-2)} ${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}`
            }
        } else if (type == "24h" || type == "12h") {
            return `${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}`
        } else if (type == "datetime") {
            return ` ${result.getFullYear()}/${(result.getMonth() + 1)}/${("0" + result.getDate()).slice(-2)} ${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}`
        } else if (type == "date") {
            return `${result.getFullYear()}-${("0" + (result.getMonth() + 1)).slice(-2)}-${("0" + result.getDate()).slice(-2)}`;
        } else if (type == "calendar") {
            const result = new Date(datetime)
            const offsetHours = getUTCHourOffset()
            result.setUTCHours(result.getUTCHours() + offsetHours)
        
            return `${result.getFullYear()}-${("0" + (result.getMonth() + 1)).slice(-2)}-${("0" + result.getDate()).slice(-2)} ${("0" + result.getHours()).slice(-2)}:${("0" + result.getMinutes()).slice(-2)}:00`
        }        
    } else {
        return "-"
    }
}

function splitOutRichTag(text){
    var res = text.replace('<div class="ql-editor" data-gramm="false" contenteditable="true">','')
        .replace('<div class="ql-editor ql-blank" data-gramm="false" contenteditable="true">','')
        .replace('<div class="ql-editor" data-gramm="false" contenteditable="true" data-dl-input-translation="true">','')
        .replace('<div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-dl-input-translation="true">','')
        .replace('</div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>','')
        .replace('<deepl-inline-translate style="z-index: 1999999999;"></deepl-inline-translate>','')
    return res
}