import { useState } from 'react'
import axios from "axios"
import './App.css'

function Register() {
  const [form, setForm]= useState({
    name: "",
    email: "",
    password: "",
    password_confirmation: ""
  })

  const handlechange = (e) => {
    setForm({
      ...form, [e.target.name]: e.target.value
    })
  }

  const handleSubmit = async (e) => { 
    e.preventDefault()
    try {
      const response = await axios.post("le lien de l'api",form)
      if (response) {
        console.log('succes')
      }
    } catch (error) {
      
    }
  }
  return (

<div className="registe-page">

    <div className="register-left">
        <div className="register-welcome">
            <h1> Perfet<span> Home</span></h1>
            <p>Work hard .</p>
            <div className="register-quote">
                "La meilleure façon de réussir est de travailler Intelligemment."
            </div>
        </div>
    </div>

    <div className="register-right" >
        <div className="register-form-container">
            <h2>Créer un compte</h2>
            <p className="register-subtitle">Remplis le formulaire pour rejoindre les Best</p>

            <form className="register-form" onSubmit={handleSubmit}>
                <div className="form-group">
                    <label htmlFor="name">Nom complet</label>
                    <input name="name" type="text" required autoFocus tabIndex="1" autoComplete="name" placeholder="Ton nom complet" value={form.name} onChange={handlechange}/>
                </div>

                <div className="form-group">
                    <label htmlFor="email">Adresse email</label>
                    <input name="email" type="email" required tabIndex="2" autoComplete="email"  placeholder="email@exemple.com"  value={form.email} onChange={handlechange}/>
                </div>

                <div className="form-group">
                    <label htmlFor="password">Mot de passe</label>
                    <input name="password" type="password" required tabIndex="4" autoComplete="new-password" placeholder="Mot de passe" value={form.password} onChange={handlechange}/>
                </div>

                <div className="form-group">
                    <label htmlFor="password_confirmation">Confirmer le mot de passe</label>
                    <input name="password_confirmation" type="password" required tabIndex="5" autoComplete="new-password" placeholder="Confirmer le mot de passe" value={form.password_confirmation} onChange={handlechange}/>
                </div>

                <button type="submit" className="register-btn" tabIndex="6">Créer mon compte</button>

                <div className="register-login-link">Déjà un compte ?
                    <a className="color-grey" tabindex="7">Se connecter</a>
                </div>
            </form>
        </div>
    </div>

    
</div>
  )
}

export default Register
