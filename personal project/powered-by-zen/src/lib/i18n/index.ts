// src/lib/i18n/index.ts
import { browser } from '$app/environment'
import { init, register } from 'svelte-i18n'

const defaultLocale = 'id'

register('en', () => import('./locales/en.json'))
register('id', () => import('./locales/id.json'))
register('ar', () => import('./locales/ar.json'))

init({
	fallbackLocale: defaultLocale,
	initialLocale: browser ? window.navigator.language : defaultLocale,
})