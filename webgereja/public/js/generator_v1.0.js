function getUTCHourOffset() {
    const offsetMi = new Date().getTimezoneOffset()
    const offsetHr = -offsetMi / 60
    return offsetHr
}