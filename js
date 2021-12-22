//axios
axios.get('http://mysite.com/api').then(response => {
    if (response.data=='error')
        this.data = []
    else{
        this.data = response.data;                        
    }
});
