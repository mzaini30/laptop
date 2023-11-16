// src/lib/i18n/index.ts
import { browser } from '$app/environment'
import { init, register } from 'svelte-i18n'

const defaultLocale = 'id'

register('en', () => import('./locales/en.json'))
register('id', () => import('./locales/id.json'))
register('ar', () => import('./locales/ar.json'))
register('zh', () => import('./locales/zh.json'))
register('ja', () => import('./locales/ja.json'))
register('ko', () => import('./locales/ko.json'))

init({
	fallbackLocale: defaultLocale,
	initialLocale: browser ? window.navigator.language : defaultLocale,
})