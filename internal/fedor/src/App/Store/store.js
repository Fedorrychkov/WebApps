
import {createStore} from 'redux';

import { reducer } from './Reducers';

export const enLang = {type: 'LANG_EN', enlang: true};
export const ruLang = {type: 'LANG_RU', enlang: false};

export const initialState = { enlang: localStorage.getItem('enlang') || true };

export const store = createStore(reducer, initialState);