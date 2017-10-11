export function reducer(state, action) {
    switch(action.type) {
        case 'LANG_RU': return { enlang: action.enlang };
        case 'LANG_EN': return { enlang: action.enlang };
        default: return state;
    }
}