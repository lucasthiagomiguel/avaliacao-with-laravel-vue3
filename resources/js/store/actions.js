import * as types from './mutation-types';
import axios  from '@/axios';
import * as storage from './storage';
import router from '@/router';

export const ActionSetLogin = ({dispatch},payload) =>{
    console.log(payload);
   return  axios.post('/login',payload).then(({data})=>{
    dispatch('ActionAuthenticated',true);
    dispatch('ActionSetToken',data.token);
   storage.setLocalToken(data.token);
   router.push('/dashboard')
    }).catch((error)=>{
        dispatch('ActionAuthenticated',false)
        console.log(error);
    })
}


export const ActionSetUser = ({commit},payload) =>{
    commit(types.SET_USER,payload)
}

export const ActionAuthenticated = ({commit},payload) =>{
    commit(types.SET_AUTHENTICATED,payload)
    
}

export const ActionSetToken = ({commit},payload) =>{
    commit(types.SET_TOKEN,payload)
}

export const ActionSetQuestion = ({commit},payload) =>{
    commit(types.SET_QUESTIONAVALIATION,payload)
}
export const ActionSingOut = ({dispatch}) => {
    storage.setHeaderToken('');
    storage.deleteLocalToken();
    dispatch('ActionSetUser',{});
    dispatch('ActionSetToken','');

}

//avaliacao de desempenho 
export const ActionQuestion = ({dispatch}) =>{
    
   return  axios.get('/performance').then(({data})=>{
    console.log(data);
    dispatch('ActionSetQuestion',data)
    }).catch((error)=>{
        console.log(error);
    })
}