Statamic.$hooks.on('entry.saving', (resolve, reject, payload) => {
    reject('Here is addon');
    if (payload.collection == "memory") {
        if(payload.values.content.length % 2 == 1){
            reject('Bitte lade eine gerade Zahl an Karten hoch.');
        }
    }
    resolve();
});
