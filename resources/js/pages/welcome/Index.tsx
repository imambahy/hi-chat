import ApplicationLogo from "@/components/ApplicationLogo";
import Checkbox from "@/components/Checkbox";
import InputError from "@/components/InputError";
import InputLabel from "@/components/InputLabel";
import PrimaryButton from "@/components/PrimaryButton";
import TextInput from "@/components/TextInput";
import { LoginUserSchema } from "@/types/user";
import { Link, useForm } from "@inertiajs/react";
import moment from "moment";
import { FormEventHandler, useEffect } from "react";
import { BsHeartFill } from "react-icons/bs";

export default function Welcome({
  canResetPassword,
  appName,
}: {
  canResetPassword: boolean;
  appName: string;
}) {
  const { data, setData, post, processing, errors, reset } =
    useForm<LoginUserSchema>({
      email: "",
      password: "",
      remember: false,
    });

    useEffect(() => {
      return () => {
        reset("password");
      };
    }, []);

  const submit: FormEventHandler = (e) => {
    e.preventDefault();

    post(route("login"), {
      onFinish: () => reset("password"),
    });
  };
  return (
    <div className="mx-auto flex min-h-screen max-w-7xl flex-col gap-8 sm:gap-12 p-6 sm:p-8 font-['Inter'] text-foreground">
      <div>
        <Link href="/">
          {/* karena gaada childnya, jadi bisa langsung <... /> */}
          <ApplicationLogo className="h-10" />
        </Link>
      </div>

      <div className="my-auto grid grid-cols-1 sm:grid-cols-2">
        <div className="space-y-8 sm:space-y-12 sm:w-11/12">
          <h1 className="text-4xl font-bold sm:text-5xl lg:text-7xl">
            <span className="bg-gradient-to-r from-blue-600 via-purple-500 to-rose-500 bg-clip-text text-transparent">
              Yapping
            </span>
            <br />
            <span className="bg-gradient-to-r from-blue-600 via-purple-500 to-rose-500 bg-clip-text text-transparent">
              anytime,
            </span>
            <span className="bg-gradient-to-r from-blue-600 via-purple-500 to-rose-500 bg-clip-text text-transparent">
              {/* &nbsp; */}
              {" anywhere"}
            </span>
          </h1>
          {/* kalo ukurannya lebih besar dari 640px, text-xl */}
          <p className="text-lg sm:text-xl">
            Hi-Chat makes people connected with a simple "Hi".
          </p>

          {/* login form */}
          <form onSubmit={submit} className="flex flex-col gap-4 lg:w-3/4">
            <div>
              <TextInput
                id="email"
                type="email"
                name="email"
                value={data.email}
                className="w-full border-secondary bg-secondary dark:border-secondary"
                autoComplete="username"
                isFocused={true}
                onChange={(e) => setData("email", e.target.value)}
                placeholder="Enter your email address"
              />

              <InputError message={errors.email} className="mt-2" />
            </div>

            <div>
              <TextInput
                id="password"
                type="password"
                name="password"
                value={data.password}
                className="w-full border-secondary bg-secondary dark:border-secondary"
                autoComplete="current-password"
                onChange={(e) => setData("password", e.target.value)}
                placeholder="Enter your password"
              />

              <InputError message={errors.password} className="mt-2" />
            </div>

            <div className="flex items-center justify-between">
              <label className="flex items-center">
                <Checkbox
                  name="remember"
                  checked={data.remember}
                  onChange={(e) => setData("remember", e.target.checked)}
                />
                <span className="ms-2 text-sm text-foreground">
                  Remember me
                </span>
              </label>
              {canResetPassword && (
                <Link href={route("password.request")} className="btn-link">
                  Forgot your password?
                </Link>
              )}
            </div>

            <div className="mt-4 flex">
              <PrimaryButton className="w-full" disabled={processing}>
                Log in
              </PrimaryButton>
            </div>

            <div className="flex justify-center">
              {/* karena udah pakai zigy jadi bisa route 'register' */}
              <Link href={route("register")} className="btn-link">
                Don't have an account?
              </Link>
            </div>
          </form>
        </div>

        <div className="flex items-center justify-center mt-4 sm:mt-0">
          <img src="/images/vector.png" alt="" />
        </div>
      </div>

      <div className="mt-auto flex gap-2">
        <Link
          className="font-medium"
          href="https://www.youtube.com/watch?v=KImuuLgTa9w&t=10350s"
        >&copy; {appName} {moment().format("Y")}.
        </Link>
        <span className="flex items-center gap-1 text-secondary-foreground">
          Built with <BsHeartFill className="text-sm text-danger" /> By Hipox
        </span>
      </div>
    </div>
  );
}
