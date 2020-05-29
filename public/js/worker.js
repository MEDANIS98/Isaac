var isLoggedIn = false;
if ('serviceWorker' in navigator) {
    navigator.serviceWorker
        .register('js/service-workerde9a.js?id=c2eb1d5f48ddbaabad3c')
        .then(function (reg) {
            if (isLoggedIn) {
                messaging.useServiceWorker(reg);
                messaging.requestPermission().then(() => {
                    return messaging.getToken();
                }).then((token) => {
                    // send token to server to link it with current logged-in user.
                    fetch('https://khaledalsabt.com/api/dashboard/tokens/' + token, {
                            method: 'POST',
                            credentials: 'include'
                        })
                        .then((response) => {});
                }).catch((error) => {
                    console.error(error);
                });
            }
        })
        .catch(function (err) {
            console.error('service worker failed --- ' + err);
        });
}
