<?php

return [
  'login' => [
    'title' => 'Welcome back',
    'subtitle' => 'Sign in to your account to manage finances',
    'email' => 'Email',
    'password' => 'Password',
    'remember_me' => 'Remember me',
    'forgot_password' => 'Forgot your password?',
    'login_button' => 'Sign in',
    'no_account' => "Don't have an account?",
    'register_link' => 'Register',
  ],
  'register' => [
    'title' => 'Registration',
    'subtitle' => 'Create a new account to manage finances',
    'name' => 'Name',
    'email' => 'Email',
    'password' => 'Password',
    'confirm_password' => 'Confirm password',
    'register_button' => 'Register',
    'already_registered' => 'Already registered?',
    'login_link' => 'Sign in',
  ],
  'password' => [
    'request' => [
      'title' => 'Forgot password?',
      'subtitle' => 'Enter your email to reset password',
      'email' => 'Email',
      'send_button' => 'Send reset link',
    ],
    'reset' => [
      'title' => 'Reset password',
      'subtitle' => 'Enter new password',
      'email' => 'Email',
      'password' => 'New password',
      'confirm_password' => 'Confirm new password',
      'reset_button' => 'Reset password',
    ],
    'confirm' => [
      'title' => 'Confirm password',
      'subtitle' => 'This is a secure area of the application. Please confirm your password before continuing.',
      'password' => 'Password',
      'confirm_button' => 'Confirm',
    ],
  ],
  'verify_email' => [
    'title' => 'Verify your email',
    'subtitle' =>
      'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.',
    'link_sent' => 'A new verification link has been sent to the email address you provided during registration.',
    'resend_button' => 'Resend verification email',
    'logout_button' => 'Log out',
  ],
  'failed' => 'These credentials do not match our records.',
  'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
];
